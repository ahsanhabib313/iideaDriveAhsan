<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Addusers;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function addUser(Request $request)
    {
        // $request->validate([
        //     'first_name' => 'required|unique:categories,name',
        //     'last_name' => 'required',
        //     'username' => 'required|unique',
        //     'email' => 'reequired|unique'
        // ]);
        // Addusers::insert([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'username' => $request->username,
        //     'email' => $request->email
        // ]); 
        //  return redirect('addUser')->with('success','user Added successfully!');


         return view('admin.addUser');
    }
}