{{-- resources/views/users/delete.blade.php --}}

@extends('base')

@section('titulo', 'Apagar | Usuários')

@section('conteudo')
<p class="font-bold mx-auto text-center">Tem certeza que deseja apagar?</p>
<p class="text-center italic">{{$user->name}}</p>

<section class="flex gap-x-2 items-center mx-auto w-fit my-4">
    
    <form action="{{route('users.delete', $user['id'])}}" method="POST">
        @method('delete')
        @csrf

        <button type="submit" class="py-2 px-8 bg-rose-600 hover:bg-rose-500 rounded-xl text-white">Pode apagar sem medo</button>
    </form>

    <a href="{{route('users')}}" class="py-2 px-8 rounded-xl hover:bg-zinc-100">Cancelar</a>
</section>

@endsection