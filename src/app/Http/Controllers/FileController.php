<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function write(Request $request)
    {
        if (
            isset($_POST['model'])
            && isset($_POST['city'])
            && isset($_POST['name'])
            && isset($_POST['personalCar'])
            && isset($_POST['phone'])
            && isset($_POST['email'])
        ) {
            $data = 'Pasirinkitas modelis: ' . $_POST['model'] . "\n"
                . 'Miestas: ' . $_POST['city'] . "\n"
                . 'Vardas Pavardė: ' . $_POST['name'] . "\n"
                . 'Nuosavas automobilis: ' . $_POST['personalCar'] . "\n"
                . 'Telefono nr.: ' . $_POST['phone'] . "\n"
                . 'El. pašto adresas: ' . $_POST['email'];

            Storage::disk('local')->put("{$_POST['name']}.txt", $data);
        }

        // return view('index');
        header("Location: /");
    }
}
