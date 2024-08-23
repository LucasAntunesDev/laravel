{{-- resources/views/users/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Usuários')

@section('conteudo')

<header>
    <a href="{{route('users')}}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg> Voltar
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

<form action="{{ route('users.store') }}" method="post">
    @csrf

    <input type="text" name="name" id="name" placeholder="Nome" value="{{old('name')}}" c />

    <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" c />


    <input type="text" name="username" id="username" placeholder="Usuário" value="{{old('username')}}" c />

    <input type="text" name="password" id="password" placeholder="Senha" value="{{old('password')}}" c />



    <div>
        <h2>É admin?</h2>
        <div>
            <label for="true">Sim</label>
            <input type="radio" name="admin" id="true" placeholder="admin" value="1" />
        </div>

        <div>
            <label for="false">Não</label>
            <input type="radio" name="admin" id="false" placeholder="admin" value="0" />
        </div>
    </div>

    <input type="submit" value="Gravar">

</form>

@endsection
