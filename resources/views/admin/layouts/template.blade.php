<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/animate.min.css') }}">
    <link href="{{ asset('dist/css/fontawesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/toastify.min.css') }}">


    <script src="{{ asset('dist/js/jquery.js') }}"></script>
    <script src="{{ asset('dist/js/axios.min.js') }}"></script>
    <script src="{{ asset('dist/js/toastify-js.js') }}"></script>
    <script src="{{ asset('dist/js/config.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/fontawesome.min.js') }}"></script>

</head>

<body class="text-gray-800 font-inter">

    @include('admin.layouts.sidebar')

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">

        @include('admin.layouts.header')

        <div class="px-6 py-2 mt-3">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('dist/js/script.js') }}"></script>
    <script src="{{ asset('dist/js/Toasts.js') }}"></script>


</body>

</html>
