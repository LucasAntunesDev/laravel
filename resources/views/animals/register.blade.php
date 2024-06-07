{{-- resources/views/animals/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para doação')

@section('conteudo')

<p>Preencha o formulário</p>

<form action="{{ route('animals.store') }}" method="post">
    <input type="text" name="nome" id="nome" placeholder="Nome">
    <br>
    <input type="number" name="idade" id="idade" placeholder="Idade">
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection