<?php

use App\Http\Controllers\DrinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::view( "/elso", "elso" );

Route::get( "/elso/{name}", function( $name ){
    return view( "elso", [ "name" => $name ] );
} );

Route::get( "/index", [ DrinkController::class, "index" ] );

Route::view( "/add", "newdrink" );

Route::post( "/adddrink", [ DrinkController::class, "newDrink" ] );
