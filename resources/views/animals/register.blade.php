{{-- resources/views/animals/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para doação')

@section('conteudo')

<p>Preencha o formulário</p>

<form action="{{ route('animals.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome">
    <br>
    <input type="number" name="age" id="age" placeholder="Idade">
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection