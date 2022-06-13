<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitType;

class UnitTypeController extends Controller
{
    public function index()
    {
        $unittypes = UnitType::all();
        return $unittypes;
    }
}