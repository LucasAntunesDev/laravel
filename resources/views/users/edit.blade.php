{{-- resources/views/users/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Editar | Usuários')

@section('conteudo')

<header>
    <a href="{{route('users')}}" class="inline-flex gap-2 items-center hover:text-gray-600">
        <i class="fas fa-chevron-left"></i>
        Voltar
    </a>
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i>
        Preencha o formulário
    </p>
</header>

@if ($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach ($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<div class="leading-loose">
    <form action="{{ route('users.edit', $user->id )}}" method="post" class="p-10 bg-white rounded shadow-xl">
        @csrf
        @method('put')

        <div>
            <label class="block text-sm text-gray-600" for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="name" value="{{old('name', $user->name ?? '')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />
        </div>

        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email" value="{{old('email', $user->email ?? '')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />

        </div>


        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="username">Usuário</label>
            <input type="text" name="username" id="username" placeholder="username" value="{{old('username', $user->username ?? '')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />
        </div>


        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="password">Senha</label>
            <input type="text" name="password" id="password" placeholder="password" value="{{old('password', $user->password ?? '')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" />
        </div>


        <div class="mt-2">
            <label class="block text-sm text-gray-600">É admin?</label>
            <div>
                <input type="radio" name="admin" id="true" placeholder="admin" value="1" {{$user->admin ? 'checked' : ''}} />
                <label for="true" true>Sim</label>
            </div>

            <div>
                <input type="radio" name="admin" id="false" placeholder="admin" value="0" {{$user->admin ? '' : 'checked'}} />
                <label for="false" true>Não</label>
            </div>
        </div>

        <div class="mt-6">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded gap-x-2 inline-flex items-center" type="submit">
                <i class="fas fa-save"></i>
                Gravar
            </button>
        </div>

    </form>
</div>

@endsection
