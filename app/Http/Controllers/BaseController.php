<?php

namespace App\Http\Controllers;
use App\type;

class BaseController extends Controller
{
    public function getIndex() {
        $types = type::all();
        //dd($types);
        return view('index', compact('types'));
    }
}
