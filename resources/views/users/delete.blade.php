{{-- resources/views/users/delete.blade.php --}}

@extends('base')

@section('titulo', 'Apagar | Usuários')

@section('conteudo')
<p >Tem certeza que deseja apagar?</p>
<p >{{$user->name}}</p>

<section >
    
    <form action="{{route('users.delete', $user['id'])}}" method="POST">
        @method('delete')
        @csrf

        <button type="submit">Pode apagar sem medo</button>
    </form>

    <a href="{{route('users')}}" >Cancelar</a>
</section>

@endsection