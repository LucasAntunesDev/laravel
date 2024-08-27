{{-- resources/views/users/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')

@if ($errors->any())
<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
        <div class="py-1">
            <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
            </svg>
        </div>
        <div>
            @foreach ($errors->all() as $erro)
            <p class="font-bold">Deu ruim</p>
            <p class="text-sm">{{$erro}}</p>
        </div>
        @endforeach
    </div>
</div>
@endif

<form action="{{ route('login') }}" method="post" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <div class="">
        <label class="block text-sm text-gray-600" for="usuario">Usuário</label>

        <input type="text" name="username" placeholder="Usuário" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" aria-label="Usuário" id="usuario" required/>
    </div>

    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="password">Senha</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="Senha" aria-label="Senha">
    </div>

    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Entar</button>
    </div>

</form>

@endsection
