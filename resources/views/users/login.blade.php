{{-- resources/views/users/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')

@if (session('erro'))
<p>
    {{session('erro')}}
</p>
@endif

@if ($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach ($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form action="{{ route('login') }}" method="post">
    @csrf

    <input type="text" name="username" placeholder="Usuário" />

    <input type="password" name="password" placeholder="Senha" />

    <button type="submit">
        Entrar
    </button>

</form>

@endsection
