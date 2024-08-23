{{-- resources/views/animals/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para doação')

@section('conteudo')

<header>
    <a href="{{route('animals')}}">
        Voltar
    </a>
    <p>Preencha o formulário</p>
</header>

@if ($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach ($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form action="{{ route('animals.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome" value="{{old('name')}}">

    <input type="number" name="age" id="age" placeholder="Idade" value="{{old('age')}}" min="0">

    <input type="submit" value="Gravar">
</form>

@endsection
