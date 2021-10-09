<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CarController extends Controller
{
    use GeneralTrait;
    public function getCars(){

        $cars = car::all();
        // return response()->json($cars);
        return $this -> returnData('cars',$cars);

    }
  
}
