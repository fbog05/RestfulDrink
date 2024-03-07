<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function newType( Request $request ){

        $input = $request->all();

        $type = new Type();
        $type->type = $input["type"];

        $type->save();
    }
}
