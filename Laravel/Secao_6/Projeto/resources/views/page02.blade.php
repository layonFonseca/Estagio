@extends ('layouts.main')

@section ('titulo', 'Página 02')

@section('content')

    <h1>Esta é a página 02</h1>

    @foreach ($nomes as $nome)
        <p>Olá {{ $nome }}</p>
    @endforeach

    <a href="{{route('page01')}}">Visitar a página 01</a>
@endsection