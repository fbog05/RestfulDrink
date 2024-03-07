<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index(){

        $drinks = Drink::with( "type", "package" )->get();

        return view( "drink", [ "drinks" => $drinks ] );
    }

    public function newDrink(Request $request){

        $input = $request->all();

        $drink = new Drink();
        $drink->drink = $input[ "drink" ];
        $drink->amount = (int)$input[ "amount" ];
        $drink->type_id = ( new TypeController )->getTypeId( $input[ "type" ] );
        $drink->package_id = ( new PackageController )->getPackageId( $input[ "package" ] );

        $drink->save();
    }
}
