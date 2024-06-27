{{-- resources/views/animals/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para doação')

@section('conteudo')

<p class="mx-auto inline-flex">
    <a href="{{ route('animals.register') }}" class="hover:underline">Cadastrar animal</a>
</p>

<p class="mx-auto inline-flex ml-4">Veja nossa lista de animais para doação</p>

<table class="mx-auto border">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    @foreach ($animals as $animal)
    <tr>
        <td>{{$animal->name}}</td>
        <td>{{$animal->age}}</td>
        <td class="my-4">
            <a href="{{route('animals.edit', $animal->id)}}" class="inline-flex border-[1px] border-teal-600 text-teal-600 p-2 rounded-xl">Editar</a>
            <a href="{{route('animals.delete', $animal->id)}}" class="inline-flex border-[1px] border-rose-600 text-rose-600 p-2 rounded-xl">Apagar</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection