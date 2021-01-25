<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function addUser(Request $request)
    {



        return view('admin.addUser');
    }
}