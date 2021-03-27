<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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

    public function addCart($id){
        /*$menus = Menu::all();
        $cart = Menu::findOrFail($id);
        return view('client.menu', compact('cart','menus'));*/
    }
}
