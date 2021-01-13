<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowTillsController extends Controller
{
    public function showTills(Request $request)
    {
        return view('tills.showTills');
    }
}