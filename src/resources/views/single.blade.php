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
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="card mb-3" style="max-width: 1540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $car->img }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title border-2 border-bottom"><b>BMW {{ $car->model }}</b></h5>
                                    <p class="card-text"><b>Variklis:</b> {{ $car->engine }} l.</p>
                                    <p class="card-text"><b>Galia:</b> {{ $car->power }} kW.</p>
                                    <p class="card-text"><b>Pavarų dėžė:</b> {{ $car->gearbox }}.</p>
                                    <p class="card-text"><b>Kuras:</b> {{ $car->fuel }}.</p>
                                    <p class="card-text"><b>Spalva:</b> {{ $car->color }}.</p>
                                    <p class="card-text"><b>Komplektacija:</b> {{ $car->interior }}.</p>
                                </div>
                                <div class="card-footer">
                                    <h2>Kaina: {{ $car->price }} &#8364.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.partials.footer')
    </div>
    @stack('modals')
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
@stack('scripts')

</html>