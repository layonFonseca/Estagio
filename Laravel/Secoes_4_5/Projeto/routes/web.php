<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/page01', function () {
    return view('page01', ["meunome" => "Layon"]);
})->name('page01');

Route::get('/page02', function () {
    $nomes = array('Arthur','Bruna', 'Carlos', 'Dalila');
    return view('page02',['nomes' => $nomes]);
})->name('p2');


Route::get('/testando-parametros/{nome}/{sobrenome}', function ($nome, $sobrenome) { //rotas com parâmetros obrigatórios
    echo "Olá! Seja bem vindo, $nome $sobrenome!";
});

Route::get('/testando-parametros-opcionais/{nome?}', function ($nome=null){ // rotas com parâmetros opcionais
    if(isset($nome))
        return "<h2>Olá $nome! Seja bem vindo(a)!</h2>";
    return "<h2>Seja bem vindo(a)!</h2>";
})->name('bem-vindo');

Route::get('/parametros-com-regras/{nome}/{n}', function ($nome, $n){ // rotas com parametros com regras como char e int

    for($i=0;$i<$n;$i++)
        echo "Você digitou o nome: $nome<br>";

}) ->where('nome', '[A-Za-z]+') ->where('n','[0-9]+');


Route::prefix('/')->group(function(){ //agrupamento de rotas, por padrão o / já seria um agrupamento, mas poderia ser um /app e as rotas do grupo /app/nome_da_rota

    Route::get('/', ['as' => 'root', function () { // Para controlar a rota da página inicial
        return view('index');
        }])->name('app');
          
    Route::get('/contact', function () {
        return view('contact'); //view é uma pasta que armazena os arquivos com o template blade do laravel que permite usar o php e o html juntos
        })->name('app.contact');
        
    
});

Route::get('/produtos', function (){
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>"; 
    echo "<li>Mouse</li>";
})->name('meusprodutos');

Route::redirect('todos-produtos1', 'produtos', '301'); // redirecionando requisições

Route::get('todos-produtos2', function (){ //util para redirecionamento com controladores
    return redirect()->route('meusprodutos'); 
});


//Métodos Http 
/* 
    A rota requisicoes esta sendo trabalhada como excecao em app/Http/Middleware/VerifyCsrfToken.php
    por causa do CSFC (um tipo de ataque/solicitação não autorizado, por isso a exceção)
*/

Route::post('/requisicoes', function (Request $request){
    return 'Hello POST';
});


Route::delete('/requisicoes', function (Request $request){
    return 'Hello DELETE';
});


Route::put('/requisicoes', function (Request $request){
    return 'Hello PUT';
});


Route::patch('/requisicoes', function (Request $request){
    return 'Hello PATCH';
});


Route::get('/requisicoes', function (Request $request){
    return 'Hello GET';
});

