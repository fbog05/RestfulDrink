<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TypeController;
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

Route::get( "/new-drink", [ DrinkController::class, "newDrink" ] );

Route::post( "/submit-drink", [ DrinkController::class, "submitDrink" ] );

Route::post( "/add-type", [ TypeController::class, "newType" ] );

Route::post( "/add-package", [ PackageController::class, "newPackage" ] );

Route::get( "/modify/{id}", [ DrinkController::class, "modify" ] );

Route::put( "/modify/modify-drink", [ DrinkController::class, "modifyDrink" ] );

Route::delete( "/delete-drink", [ DrinkController::class, "deleteDrink" ] );