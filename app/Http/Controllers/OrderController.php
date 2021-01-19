<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function orderList(Request $request)
    {
        //$orders = Orders::orderBy('created_at', 'desc')->get();
        //return view('admin.orderList',compact('orders'));
        return view('admin.orderList');
    }
}