<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * show menu page
     * @param  Request $request http request
     */
    public function showMenu(Request $request)
    {
        return view('client.menu');
    }
}
