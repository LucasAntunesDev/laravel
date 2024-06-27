{{-- resources/views/animals/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Editar | Animais para doação')

@section('conteudo')

<p class="mx-auto">Preencha o formulário</p>

@if ($errors->any())
<div class="border border-rose-500 w-fit px-4 py-3 rounded-xl mx-auto flex flex-col">
    <h4>Deu ruim</h4>
    @foreach ($errors->all() as $erro)
    <p class="text-rose-500">{{$erro}}</p>
    @endforeach
</div>
@endif

<form action="{{ route('animals.edit', $animal->id )}}" method="post" class="mx-auto flex flex-col gap-y-2">
    @csrf
    @method('put')
    <input type="text" name="name" id="name" placeholder="Nome" value="{{old('name', $animal->name ?? '') }}"
        class="border border-neutral-900 p-2 rounded-xl w-fit mx-auto">
    <br>
    <input type="number" name="age" id="age" placeholder="Idade" value="{{old('age', $animal->age ?? '') }}"
        class="border border-neutral-900 p-2 rounded-xl w-fit mx-auto">
    <br>
    <input type="submit" value="Gravar" class="bg-emerald-500 hover:bg-emerald-600 rounded-xl p-4 w-fit mx-auto hover:cursor-pointer">
</form>

@endsection