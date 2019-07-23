<?php

namespace App\Http\Controllers;
use App\type;
use App\item;
use Carbon\Carbon;

class BaseController extends Controller
{
    public function getIndex()
    {
        $types = type::all();
        $items = item::orderBy('id', 'DESC')->paginate(2);
        return view('index', compact('types', 'items'));
    }
}
