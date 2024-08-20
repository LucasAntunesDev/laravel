{{-- resources/views/users/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')

@if (session('erro'))
<p class="border border-rose-500 w-fit px-4 py-3 rounded-xl mx-auto flex flex-col my-4 text-rose-500">
    {{session('erro')}}
</p>
@endif

@if ($errors->any())
<div class="border border-rose-500 w-fit px-4 py-3 rounded-xl mx-auto flex flex-col">
    <h4>Deu ruim</h4>
    @foreach ($errors->all() as $erro)
    <p class="text-rose-500">{{$erro}}</p>
    @endforeach
</div>
@endif

<form action="{{ route('login') }}" method="post" class="mx-auto flex flex-col gap-y-2 *:my-1">
    @csrf

    <input type="text" name="username" placeholder="Usuário" />


    <input type="password" name="password" placeholder="Senha" />


    <button type="submit">
        Gravar
    </button>

</form>

@endsection
