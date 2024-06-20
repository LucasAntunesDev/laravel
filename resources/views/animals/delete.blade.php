{{-- resources/views/animals/delete.blade.php --}}

@extends('base')

@section('titulo', 'Apagar | Animais para doação')

@section('conteudo')
<p class="font-bold mx-auto text-center">Tem certeza que deseja apagar?</p>
<p class="text-center"><em>{{$animal->name}}<em></p>
<form action="">

</form>
@endsection