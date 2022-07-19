@extends('layouts.main')

@section('titulo','Página 01')

@section('content')

    <h1>Página 01</h1>
    <p>Olá {{ $meunome }}</p> <!-- Meu nome vem da rota como parâmentro em web.php> --> 
    <a href="{{route('p2')}}">Visitar a página 02</a>
@endsection