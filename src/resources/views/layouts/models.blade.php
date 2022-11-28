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
    @vite(['resources/sass/dealership.scss', 'resources/js/dealership/dealership.js'])
    @stack('styles')
    <title>{{ config('app.name') }}@yield('title')</title>
</head>

<body>
    <div class="container py-3">
        @include('layouts.partials.header')
        <main>
            <div class="row text-center justify-content-between">
                @foreach ($cars as $car)
                <div class="card mt-4" style="width: 18rem;">
                    <img src="{{ $car->img }}" class="card-img-top mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>BMW {{ $car->model }}</b></h5>
                        <p class="card-text">Variklis: {{ $car->engine }} l.<br>Galia: {{ $car->power }} kW.<br>Pavarų dėžė: {{ $car->gearbox }}.<br>Spalva: {{ $car->color }}<br></p>
                        <h4 class="card-text"><b>{{ $car->price }} &#8364</b></h4>
                    </div>
                    <div class="card-body align-items-end">
                        <a href="{{ route('single', $car->id) }}" class="btn btn-primary">Daugiau informacijos</a>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
        @include('layouts.partials.footer')
    </div>
    @stack('modals')
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
@stack('scripts')

</html>