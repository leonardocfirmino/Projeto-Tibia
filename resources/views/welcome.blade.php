<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('src/style.css')}}">

    <title>Bem-Vindo</title>

</head>

<body>

    <div class="flex-center">
            <div class="content">
                <a href="{{route('register')}}" class="title">JOGUE GRÁTIS</a> 
                <a href="{{route('login')}}" class="link">Já possui conta ? Clique aqui!</a>
            </div>
    </div>
    <div class="black"></div>
    
</body>

</html>