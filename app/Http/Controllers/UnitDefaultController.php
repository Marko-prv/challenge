<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class UnitDefaultController extends Controller
{
    public function index()
    {

        $path =storage_path(). "/units/unit.json";

        if ( file_exists($path)){
            $units= cache()  -> rememberForever("units/", fn() => json_decode(file_get_contents($path)));
        }else {
            return json(null);
        }

        return $units;
    }
}