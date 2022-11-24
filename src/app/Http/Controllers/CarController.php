<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = DB::table('cars')->get();

        return view('layouts.models', ['cars' => $cars]);
    }
}
