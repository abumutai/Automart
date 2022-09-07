<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\CarMake;

class CarController extends Controller {
    
    public function getCarMakes() {
        return view('login', ['getCarMakes' => CarMake::all()]);
    }

}