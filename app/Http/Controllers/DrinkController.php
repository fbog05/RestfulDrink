<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index(){

        $name = "Béla";
        $email = "bela@vmi.lan";

        return view( "drink", compact( "name", "email" ) );
    }

    public function newDrink(Request $request){

        echo "<pre>";

        print_r( $request->all() );
    }
}
