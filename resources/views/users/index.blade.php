1{{-- resources/views/users/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')

<main>
    <header>
        <div>
            <h1>Usuários</h1>
            <p>Estes são os usuários cadastrados</p>
        </div>

        <a href="{{ route('users.register') }}" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">
            <i class="fas fa-plus mr-3"></i>
            Cadastrar
        </a>
    </header>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Usuário</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Admin?</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm" colspan="2"></th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                @foreach ($users as $user)
                <tr @if($loop->even) class="bg-gray-200" @endif>
                    <td class="w-1/3 text-left py-3 px-4">{{$user->name}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$user->email}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$user->username}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$user->admin ? 'Sim' : 'Não'}}</td>

                    <td class="w-1/3 text-left py-3 px-4">
                        <a href="{{route('users.edit', $user->id)}}" class="inline-flex bg-green-500 py-1 px-4 rounded-full text-white items-center gap-x-2 hover:bg-green-700">
                            <i class="fas fa-pen"></i>
                            Editar
                        </a>
                    </td>

                    <td class="w-1/3 text-left py-3 px-4" >
                        <a href="{{route('users.delete', $user->id)}}" class="inline-flex bg-red-500 py-1 px-4 rounded-full text-white items-center gap-x-2 hover:bg-red-700">
                            <i class="fas fa-trash"></i>
                            Apagar
                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</main>

@endsection
