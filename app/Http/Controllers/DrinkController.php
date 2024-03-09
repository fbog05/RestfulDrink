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

    public function newDrink(){

        $drink = null; 

        return view( "newdrink" );
    }
    
    public function submitDrink(Request $request){

        $input = $request->all();

        $drink = new Drink();
        $drink->drink = $input[ "drink" ];
        $drink->amount = (int)$input[ "amount" ];
        $drink->type_id = ( new TypeController )->getTypeId( $input[ "type" ] );
        $drink->package_id = ( new PackageController )->getPackageId( $input[ "package" ] );

        $drink->save();
    }

    public function modify( $id ){

        $drink = Drink::with( "type", "package" )->find( $id );

        return view( "modifydrink", [ "drink" => $drink ] );
    }

    public function modifyDrink( Request $request ){

        $input = $request->all();
        $id = $input["id"];
        $drink = Drink::find($id);

        $drink->drink = $input["drink"];
        $drink->amount = (int)$input["amount"];
        $drink->type_id = (new TypeController)->getTypeId($input["type"]);
        $drink->package_id = (new PackageController)->getPackageId($input["package"]);
        $drink->save();
    }

}
