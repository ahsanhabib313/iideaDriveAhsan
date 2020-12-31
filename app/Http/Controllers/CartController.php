<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * redirect index page
     * @param  Request $request http request
     * @return \Illuminate\Http\RedirectResponse
     */
    /*
    public function showIndex(Request $request)
    {
        return redirect()->route('showSelectOrganiser');
    }
    */
    public function showCart(Request $request)
    {
        return view('client.cart');
    }
}
