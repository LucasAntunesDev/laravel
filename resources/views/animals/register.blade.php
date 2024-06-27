{{-- resources/views/animals/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para doação')

@section('conteudo')

<header class="flex items-center justify-center py-4 w-fit mx-auto px-10 gap-8">
    <a href="{{route('animals')}}"
        class="inline-flex gap-x-2 py-3 px-2 hover:bg-violet-50 hover:rounded-full text-neutral-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg> Voltar
    </a>
    <p class="text-violet-500 font-semibold">Preencha o formulário</p>
</header>

@if ($errors->any())
<div class="border border-rose-500 w-fit px-4 py-3 rounded-xl mx-auto flex flex-col">
    <h4>Deu ruim</h4>
    @foreach ($errors->all() as $erro)
    <p class="text-rose-500">{{$erro}}</p>
    @endforeach
</div>
@endif

<form action="{{ route('animals.store') }}" method="post" class="mx-auto flex flex-col gap-y-2 *:my-1">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome" value="{{old('name')}}"
        class="bg-violet-50 p-2 rounded-xl w-fit mx-auto outline-none focus:ring-2 focus:ring-violet-400 shadow-md shadow-violet-50 placeholder:text-violet-400/70 text-neutral-600 ">

    <input type="number" name="age" id="age" placeholder="Idade" value="{{old('age')}}" min="0"
        class="bg-violet-50 p-2 rounded-xl w-fit mx-auto outline-none focus:ring-2 focus:ring-violet-400 shadow-md shadow-violet-50 placeholder:text-violet-400/70 text-neutral-600 ">

    <input type="submit" value="Gravar"
        class="inline-flex gap-x-2 items-center bg-teal-600 hover:bg-teal-700 p-3 rounded-xl transition duration-300 ease-in-out cursor-pointer shadow text-sm focus:ring-2 focus:ring-teal-400 text-white w-fit mx-auto">
</form>

@endsection