{{-- TEMPLATE DE VIEW PADRÃO, JÁ INCLUINDO COMPONENTES E BIBLIOTECAS COMUNS EM TODO SISTEMA --}}

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    @include('layouts.components.navbar')

    @yield('conteudoPesquisa')

    @yield('conteudoCards')

    @include('layouts.components.footer')

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>
