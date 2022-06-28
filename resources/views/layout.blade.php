<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Jobs | Find Jobs & Projects</title>

</head>
<body class="mb-48">
<nav class="flex justify-between items-center mb-4">
    <a href="/"><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"/></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        <li>
            <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>
        <li>
            <a href="/login" class="hover:text-laravel"
            ><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
        </li>
    </ul>
</nav>

<main>
    {{$slot}}
</main>
<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
  </footer>
</body>
</html>