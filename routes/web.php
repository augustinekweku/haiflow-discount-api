<?php

use App\Http\Controllers\DiscountCodesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('api')->group(function(){
Route::get('/postcode/{code}',[DiscountCodesController::class, 'PostCode']);
Route::get('/get_all_codes',[DiscountCodesController::class, 'getAllCodes']);
Route::get('/update_code_status/{code}',[DiscountCodesController::class, 'updateCodeStatus']);
});

Route::get('/', function () {
    return view('welcome');
});
