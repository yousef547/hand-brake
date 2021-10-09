<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\cmodel;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CmodelController extends Controller
{
    use GeneralTrait;

    public function getModel($id){
        $models = cmodel::where('car_id', $id)->get();
        if($models->isEmpty())
            return $this->returnError('404','not found');
        return $this -> returnData('models',$models);
     }
}
