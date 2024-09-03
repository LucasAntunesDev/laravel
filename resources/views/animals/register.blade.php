{{-- resources/views/animals/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para doação')

@section('conteudo')

<header>
    <a href="{{route('animals')}}" class="inline-flex gap-2 items-center hover:text-gray-600">
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

    <form action="{{ route('animals.store') }}" method="post" class="p-10 bg-white rounded shadow-xl" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="block text-sm text-gray-600" for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Nome" value="{{old('name')}}" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" required>
        </div>

        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="age">Idade</label>
            <input type="number" name="age" id="age" placeholder="Idade" value="{{old('age')}}" min="0" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" required>
        </div>

        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="image">Imagem</label>
            <input type="file" name="image" id="image" placeholder="Imagem" value="{{old('image')}}" min="0" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
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
