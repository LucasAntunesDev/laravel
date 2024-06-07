{{-- resources/views/animals/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para doação')

@section('conteudo')

<p>
    <a href="{{ route('animals.register') }}">Cadastrar animal</a>
</p>

<p>Veja nossa lista de animais para doação</p>

@endsection