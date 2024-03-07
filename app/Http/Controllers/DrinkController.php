<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index(){

        $name = "Béla";
        $email = "bela@vmi.lan";

        return view( "drink", compact( "name", "email" ) );
    }

    public function newDrink(Request $request){

        $input = $request->all();

        $drink = new Drink();
        $drink->name = $input[ "name" ];
        $drink->amount = $input[ "amount" ];
        $drink->type_id = ( new TypeController )->getTypeId( $input[ "type" ] );
        $drink->package_id = ( new PackageController )->getPackageId( $input[ "package" ] );

        $drink->save();
    }
}
