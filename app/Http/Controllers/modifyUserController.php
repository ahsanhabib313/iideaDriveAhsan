<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modifyUserController extends Controller
{
     public function modifyUser(Request $request)
    {
        return view('admin.modifyUser');
    }
}