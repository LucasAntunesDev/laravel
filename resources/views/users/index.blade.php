{{-- resources/views/users/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')

<main>
    <header>
        <div>
            <h1>Usuários</h1>
            <p>Estes são os usuários cadastrados</p>
        </div>

        <a href="{{ route('users.register') }}">
            Cadastrar usuário

        </a>
    </header>

    <table>
        <tr>
            <th>Nome</th>
            <th>email</th>
            <th>Usuário</th>
            <th>Admin?</th>
            <th colspan="2">Ações</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->admin ? 'Sim' : 'Não'}}</td>

            <td>
                <a href="{{route('users.edit', $user->id)}}">
                    Editar
                </a>
            </td>

            <td>
                <a href="{{route('users.delete', $user->id)}}">
                    Apagar
                </a>
            </td>

        </tr>
        @endforeach

    </table>
</main>

@endsection
