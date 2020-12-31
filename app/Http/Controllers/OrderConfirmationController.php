<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderConfirmationController extends Controller
{
    /**
     * redirect to order confirmation page
     * @param  Request $request http request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showOrderConfirmation(Request $request)
    {
        return view('client.OrderConfirmation');
    }
}
