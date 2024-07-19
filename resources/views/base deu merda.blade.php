{{-- resources/views/base.blade.php--}}
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="pl-10 py-4 w-screen border-b border-b-neutral-300">

        <a href="{{route('index')}}" class="text-violet-500 hover:underline mx-auto w-fit">Inicial</a>
        <span class="mx-3 text-slate-500">|</span>
        <a href="{{route('animals')}}" class="text-violet-500 hover:underline mx-auto w-fit">Animais</a>

        @if (Auth::user() && Auth::user()->admin)
        <span class="mx-3 text-slate-500">|</span>
        <a href="{{route('users')}}" class="text-violet-500 hover:underline mx-auto w-fit">Usuários</a>
        @endif

        <span class="mx-3 text-slate-500">|</span>

        @if (Auth::user())
        <a href="{{route('logout')}}"
            class="text-violet-500 hover:underline hover:text-rose-600 mx-auto w-fit">Logout</a>

        <span class="mx-3 text-slate-500">|</span>

        <p class="inline-flex">Olá, <span class="font-bold">&nbsp;{{Auth::user()->name}}</span> !</p>
        @else
        <a href="{{route('login')}}" class="text-violet-500 hover:underline mx-auto w-fit">Login</a>
        @endif

    </header>

    <h1 class="mx-auto text-violet-500 w-fit text-4xl font-bold my-6">@yield('titulo')</h1>

    @yield('conteudo')
</body>

</html>