<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
     public function showDashboard(Request $request)
    {
        return view('admin.index');
    }
}