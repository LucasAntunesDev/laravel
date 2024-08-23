{{-- resources/views/animals/delete.blade.php --}}

@extends('base')

@section('titulo', 'Apagar | Animais para doação')

@section('conteudo')
<p>Tem certeza que deseja apagar?</p>
<p>{{$animal->name}}</p>

<section>

    <form action="{{route('animals.delete', $animal['id'])}}" method="POST">
        @method('delete')
        @csrf

        <button type="submit">Pode apagar sem medo 👍</button>
    </form>

    <a href="{{route('animals')}}">Cancelar</a>
</section>

@endsection
