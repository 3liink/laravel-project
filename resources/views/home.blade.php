<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Pridi:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @vite('resources/css/app.css')


    <!-- Styles -->
    <style>

    </style>
    @vite('resources/js/app.js')
</head>

<body>
    @include('layouts.navbar')
    <div class="container mb-3">
        @include('components.TestFormComponent')
        
    </div>
    <div class="container">
        <p>{{ $test }}</p>
        @foreach ($test as $t)
            <p>{{ $t->title }} : {{ $t->created_at }}</p>
        @endforeach
        {{ app()->getLocale() }}
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
</body>

</html>
