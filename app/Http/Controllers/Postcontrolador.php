<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Http\RedirectResponse;
class Postcontrolador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $posts = Post::all();
            return view('Cadastro', compact([ 'posts']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $post = new Post();
            $post->name = $request->input('name');
            $post->idu = $request->input('idu');
            $post->serie = $request->input('serie');
            $post->insta = $request->input('insta');
            $post->face = $request->input('face');
            $post->matematica = $request->input('matematica');
            $post->save();
            return redirect('/post')->with('message','Cadastro feito com sucesso! Veja seu cadastro na Home.');

        } catch (Exception $e) {
            return redirect('/post')->with('error','Um erro ocorreu: '+ $e);

        }
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $post = post::find($id);
            if(isset($post)) {
                $post->delete();
            }
            
            return redirect('/post')->with('deleted','Cadastro deletado com sucesso! Se quiser, crie um novo cadastro.');

        } catch (Exception $e) {
            return redirect('/post')->with('error','Um erro ocorreu: '+ $e);

        }
    }
}
