<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientLoginController extends Controller
{
    /**
     * redirect Client Login page
     * @param  Request $request http request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showClientLogin(Request $request)
    {
        return view('client.clientLogin');
    }
}
