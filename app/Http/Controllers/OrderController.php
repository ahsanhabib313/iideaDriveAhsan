<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function orderList(Request $request)
    {
        return view('admin.orderList');
    }
}