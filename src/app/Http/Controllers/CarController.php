<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = DB::table('cars')->orderBy('model')->paginate(12);

        return view('layouts.models', ['cars' => $cars]);
    }

    public function single($id)
    {
        $car = Car::find($id);
        return view('single', ['car' => $car]);
    }

    public function service()
    {
        return view('layouts.service');
    }

    public function placeholder()
    {
        return view('layouts.content.placeholder');
    }
}
