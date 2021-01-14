<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Menu;
use Illuminate\Http\Request;

class manageMenuController extends Controller
{
     public function manageMenu(Request $request)
    {
        return view('admin.manageMenu');
    }
    public function insertmenu(Request $request)
    {
        $request->validate([
            'item_name' => 'required|unique:menus,item_name',
            'item_image' => '',
            'item_category' => 'required|unique:menus,item_name',
            'item_price' => 'required|unique:menus,item_name',
            'item_description' => 'required|unique:menus,item_name',
        ]);
        Menu::insert([
            'item_name' => $request->item_name,
            'item_image' => $request->item_image,
            'item_category' => $request->item_category,
            'item_price' => $request->item_price,
            'item_description' => $request->item_description
        ]); 
         return redirect('manageMenu')->with('success','Category Added successfully!');
    }

    // show class for read data
    public function showmenu(Request $request){
        $menu = Menu::orderBy('id', 'desc')->get();
        $total_cat = Menu::count();
        return view('admin.manageMenu', compact('menu', 'total_cat'));

    }
}

    