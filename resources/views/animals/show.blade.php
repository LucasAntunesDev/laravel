@extends('base')

@section('titulo', 'Animais para doação - ')

@section('conteudo')
<p><strong>Nome</strong>{{$animal->name}}</p>
<p><strong>Idade</strong>{{$animal->age}}</p>
<img src="{{asset('img/'. $animal->image)}}">
@endsection
