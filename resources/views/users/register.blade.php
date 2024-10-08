{{-- resources/views/users/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Usuários')

@section('conteudo')

<header>
    <a href="{{route('users')}}" class="inline-flex gap-2 items-center hover:text-gray-600">
        <i class="fas fa-chevron-left"></i>
        Voltar
    </a>

    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i>Preencha o formulário</p>
</header>

@if ($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach ($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form action="{{ route('users.store') }}" method="post" class="p-10 bg-white rounded shadow-xl">
    @csrf

    <div>
        <label class="block text-sm text-gray-600" for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Nome" value="{{old('name')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />
    </div>

    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />
    </div>


    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="username">Usuário</label>
        <input type="text" name="username" id="username" placeholder="Usuário" value="{{old('username')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />
    </div>

    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="password">Senha</label>
        <input type="text" name="password" id="password" placeholder="Senha" value="{{old('password')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />
    </div>

    <div class="mt-2">
        <label class="block text-sm text-gray-600">É admin?</label>
        <div>
            <label for="true">Sim</label>
            <input type="radio" name="admin" id="true" placeholder="admin" value="1" />
        </div>

        <div>
            <label for="false">Não</label>
            <input type="radio" name="admin" id="false" placeholder="admin" value="0" />
        </div>
    </div>

    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded gap-x-2 inline-flex items-center" type="submit">
            <i class="fas fa-save"></i>
            Gravar
        </button>
    </div>

</form>

@endsection
