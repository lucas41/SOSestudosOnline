<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class matematica extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conjunto()
    {
        $posts = Post::where('matematica', '=', 'Conjuntos numéricos')->get();
        return view('Matérias/Conjuntos', compact([ 'posts']));
    }

    public function Regularidades()
    {
        $posts = Post::where('matematica', '=', 'Regularidades numéricas')->get();
        return view('Matérias/regularidade', compact([ 'posts']));
    }

    public function Progressoes()
    {
        $posts = Post::where('matematica', '=', 'Progressões aritméticas  e progressões geométricas')->get();
        return view('Matérias/Progressoes', compact([ 'posts']));
    }

    public function duasgrandezas()
    {
        $posts = Post::where('matematica', '=', 'Relação entre duas grandezas')->get();
        return view('Matérias/duasgrandezas', compact([ 'posts']));
    }

    public function Proporcionalidades()
    {
        $posts = Post::where('matematica', '=', 'Proporcionalidades')->get();
        return view('Matérias/Proporcionalidades', compact([ 'posts']));
    }

    public function Funcao_de_1_grau()
    {
        $posts = Post::where('matematica', '=', 'Função de 1º grau')->get();
        return view('Matérias/Funcao_de_1_grau', compact([ 'posts']));
    }

    public function Funcao_de_2_grau()
    {
        $posts = Post::where('matematica', '=', 'Função de 2º grau')->get();
        return view('Matérias/Funcao_de_2_grau', compact([ 'posts']));
    }

    public function Crescimento()
    {
        $posts = Post::where('matematica', '=', 'Crescimento')->get();
        return view('Matérias/Crescimento', compact([ 'posts']));
    }

    public function Funcao_exponencial()
    {
        $posts = Post::where('matematica', '=', 'Função exponencial')->get();
        return view('Matérias/Funcao_exponencial', compact([ 'posts']));
    }

    public function inequações()
    {
        $posts = Post::where('matematica', '=', 'inequações')->get();
        return view('Matérias/inequações', compact([ 'posts']));
    }

    public function Logaritmos()
    {
        $posts = Post::where('matematica', '=', 'Logaritmos')->get();
        return view('Matérias/Logaritmos', compact([ 'posts']));
    }

    public function Função_logarítmica()
    {
        $posts = Post::where('matematica', '=', 'Função logarítmica')->get();
        return view('Matérias/Função_logarítmica', compact([ 'posts']));
    }

    public function trigonométricas()
    {
        $posts = Post::where('matematica', '=', 'Razões trigonométricas nos triângulos retângulos')->get();
        return view('Matérias/trigonométricas', compact([ 'posts']));
    }

    public function Polígonos_regulares()
    {
        $posts = Post::where('matematica', '=', 'Polígonos regulares')->get();
        return view('Matérias/Polígonos_regulares', compact([ 'posts']));
    }
    
    public function triângulos_não_retângulos()
    {
        $posts = Post::where('matematica', '=', 'Resolução de triângulos não retângulos')->get();
        return view('Matérias/triângulos_não_retângulos', compact([ 'posts']));
    }
    
    public function seus_cadastros()
    {
        $posts = Post::all();
        return view('seus_cadastros', compact([ 'posts']));
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
        //
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
        //
    }
}