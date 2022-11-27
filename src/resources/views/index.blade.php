<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 --}}
    @vite(['resources/sass/dealership.scss', 'resources/js/app.js'])
    @stack('styles')
    <title>{{ config('app.name') }}@yield('title')</title>
</head>

<body>
    <div class="container py-3">
        @include('layouts.partials.header')
        <main>
            <!-- @include('layouts.content.carousel') -->
            @yield('carousel')
            <span id='newsDiv'></span>
            <div class="mt-5 d-flex justify-content-center">
                <h1><b>BMW</b> NAUJIENOS</h1>
            </div>
            @include('layouts.content.news')
            @include('layouts.content.testDrive')
        </main>
        @include('layouts.partials.footer')
    </div>
    @stack('modals')
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
@stack('scripts')

</html>