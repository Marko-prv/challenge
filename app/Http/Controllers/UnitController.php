<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {

        $units = Unit::all();
        return $units;
    }
}