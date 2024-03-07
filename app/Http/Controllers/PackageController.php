<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function newPackage( Request $request ){

        $input = $request->all();

        $package = new Package();
        $package->package = $input["package"];

        $package->save();
    }

    public function getPackageId( $package ){

        $package = Package::where( "package", $package )->first();
        $id = $package->id;

        return $id;
    }
}
