<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * redirect to menu page
     * @param  Request $request http request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showMenu(Request $request)
    {
        return view('client.menu');
    }
}
