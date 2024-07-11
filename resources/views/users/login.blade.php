{{-- resources/views/users/login.blade.php --}}

@extends('base')

@section('titulo', 'Login')

@section('conteudo')

<form action="{{ route('login') }}" method="post" class="mx-auto flex flex-col gap-y-2 *:my-1">
    @csrf

    <input 
        type="text" 
        name="username" 
        placeholder="Usuário"
        class="bg-violet-50 p-2 rounded-xl w-fit mx-auto outline-none focus:ring-2 focus:ring-violet-400 shadow-md shadow-violet-50 placeholder:text-violet-400/70 text-neutral-600" 
    />


    <input
        type="text" 
        name="password"
        placeholder="Senha"
        class="bg-violet-50 p-2 rounded-xl w-fit mx-auto outline-none focus:ring-2 focus:ring-violet-400 shadow-md shadow-violet-50 placeholder:text-violet-400/70 text-neutral-600" 
    />


    <button 
        type="submit" 
        class="inline-flex gap-x-2 items-center bg-teal-600 hover:bg-teal-700 p-3 rounded-xl transition duration-300 ease-in-out cursor-pointer shadow text-sm focus:ring-2 focus:ring-teal-400 text-white w-fit mx-auto">
        Gravar
    </button>   

</form>

@endsection