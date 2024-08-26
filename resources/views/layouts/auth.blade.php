<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<style>
    .layout-logo {
        max-width: 100px;
        margin: auto;
    }


    .container-guest-form {
        background-color: red;
    }

    .auth-container {
        width: 100vw;
        height: 100vh;
        background-image: url('images/banniere_accueil.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-end;
    }

    .right-part {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: rgba(25, 22, 22, 0.39);
        box-shadow: 0 4px 30px rgba(49, 48, 48, 0.1);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(9.8px);
    }

    .slot-container {
        min-width: 500px;
    }

    .auth-form {
        padding-right: 2rem;
        padding-left: 2rem;
    }
</style>

<body class="auth-container">
    <div class="right-part">
        <div class="slot-container">
            <div class="logo">
                <a href="/">
                    <img src="images/logo_blanc.png" alt="reparm_logo" class="layout-logo">
                </a>
            </div>

            <div class="auth-form">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
