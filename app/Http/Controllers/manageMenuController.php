<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageMenuController extends Controller
{
     public function manageMenu(Request $request)
    {
        return view('admin.manageMenu');
    }
}