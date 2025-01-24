<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient background */
            color: white;
            margin: 0;
            padding: 0;
        }
        main {
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background: #2c3e50; /* Dark background for the form */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }
        .form-container h1 {
            text-align: center;
            color: white;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        .form-container label {
            color: #ddd;
            font-size: 0.9rem;
            margin-bottom: 5px;
            display: block;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: #34495e;
            color: white;
        }
        .form-container input:focus {
            outline: none;
            background: #3c5974; /* Slightly lighter background on focus */
        }
        .form-container button {
            width: 100%;
            padding: 12px;
            background: #6a11cb; /* Button color matches the gradient */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }
        .form-container button:hover {
            background: #2575fc; /* Slightly lighter on hover */
        }
        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
            color: #ccc;
        }
        .footer-text a {
            color: #6a11cb;
            text-decoration: none;
        }
        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main>
        <div class="form-container">
            <!-- Header -->
            <h1>{{ __('Crea tu cuenta') }} ✨</h1>

            <!-- Form -->
            <div>
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="footer-text">
                {{ __('¿Tienes una cuenta?') }} <a href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
            </div>
        </div>
    </main>
</body>
</html>
