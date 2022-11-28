<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = DB::table('cars')->get();

        return view('layouts.models', ['cars' => $cars]);
    }

    public function single($id)
    {
        $car = Car::find($id);
        return view('single', ['car' => $car]);
    }
}
