<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\year;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class YearController extends Controller
{
    use GeneralTrait;

    public function getYear($id){
        $years = year::where('cmodel_id', $id)->get();
        if($years->isEmpty())
            return $this->returnError('404','not found');
        return $this -> returnData('years',$years);
     }
}
