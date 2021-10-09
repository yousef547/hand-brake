<?php

use App\Http\Controllers\web\CarController;
use App\Http\Controllers\web\CmodelController;
use App\Http\Controllers\web\YearController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/getcar',[CarController::class,'getCars']);
Route::get('/get_model_id/{id}',[CmodelController::class,'getModel']);
Route::get('/get_year_id/{id}',[YearController::class,'getYear']);

