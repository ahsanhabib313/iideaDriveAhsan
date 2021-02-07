<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    public function adminLogin(){
        return view('admin.adminlogin');
    }
}