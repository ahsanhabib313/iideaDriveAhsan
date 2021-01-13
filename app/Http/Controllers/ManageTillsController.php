<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageTillsController extends Controller
{
    public function manageTills(Request $request)
    {
        return view('admin.manageTills');
    }
}