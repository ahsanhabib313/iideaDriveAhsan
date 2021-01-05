<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createuserController extends Controller
{
     public function createUser(Request $request)
    {
        return view('admin.createUser');
    }
}