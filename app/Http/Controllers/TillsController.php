<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TillsController extends Controller
{
    public function manageTills(Request $request)
    {
        return view('admin.manageTills');
    }

    public function showTills(Request $request)
    {
        return view('tills.showTills');
    }
}