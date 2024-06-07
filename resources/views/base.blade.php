{{-- resources/views/base.blade.php--}}
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    <h1>@yield('titulo')</h1>
    <hr>
    @yield('conteudo')
</body>

</html>