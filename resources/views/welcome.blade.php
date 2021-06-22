<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://drive.google.com/uc?id=1I1FXxriOrzBxiruAz9GmplnY5dTVY_K8">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-red-500 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                    Demo Laravel API
                </h1>
                <p class="px-2 mx-auto text-center w-full md:w-4/6 lg:w-3/6 leading-6">Welcome! 🎉 This Laravel Api Demo Project aims to demonstrate displaying list of resource or model collection into JSON, easily
                    transform the model and do other actions through API. (Note: Fake generated data was used to mass create resource. This API is not authenticated.)
                </p>
                <div class="flex justify-center items-center pt-6">
                    <a href="{{ route('product.store') }}">
                        <button class="px-8 py-3 mx-2 border-2 border-red-500 hover:bg-red-600 bg-red-500 text-white rounded-lg focus:outline-none">Start</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
