function confirmar(){
    return confirm('Tem certeza que deseja deletar este registro?');
}

function exit(){
    event.preventDefault();
    document.getElementById('logout-form').submit();
}