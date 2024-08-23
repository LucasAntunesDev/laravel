{{-- resources/views/users/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Editar | Usuários')

@section('conteudo')

<header>
    <a href="{{route('users')}}"> Voltar</a>
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

<form action="{{ route('users.edit', $user->id )}}" method="post">
    @csrf
    @method('put')
    {{-- {{old('name', $animal->name ?? '') }} --}}
    <input type="text" name="name" id="name" placeholder="name" value="{{old('name', $user->name ?? '')}}" />

    <input type="email" name="email" id="email" placeholder="email" value="{{old('email', $user->email ?? '')}}" />


    <input type="text" name="username" id="username" placeholder="username" value="{{old('username', $user->username ?? '')}}" />

    <input type="text" name="password" id="password" placeholder="password" value="{{old('password', $user->password ?? '')}}" />


    <div>
        <h2>É admin?</h2>
        <div>
            <label for="true">Sim</label>
            <input type="radio" name="admin" id="true" placeholder="admin" value="1" {{$user->admin ? 'checked' : ''}} />
        </div>

        <div>
            <label for="false">Não</label>
            <input type="radio" name="admin" id="false" placeholder="admin" value="0" {{$user->admin ? '' : 'checked'}} />
        </div>
    </div>

    <input type="submit" value="Gravar">

</form>

@endsection
