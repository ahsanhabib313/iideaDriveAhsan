<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Menu;
use Illuminate\Http\Request;

class manageMenuController extends Controller
{
    public function insertmenu(Request $request)
    {
        $request->validate([
            'item_name' => 'required|unique:menus,item_name',
            'item_image' => '',
            'item_category' => 'required|unique:menus,item_name',
            'item_price' => 'required|unique:menus,item_name',
            'item_description' => 'required|unique:menus,item_name',
        ]);
        // Menu::insert([
        //     'item_name' => $request->item_name,
        //     'item_image' => $request->item_image,
        //     'item_category' => $request->item_category,
        //     'item_price' => $request->item_price,
        //     'item_description' => $request->item_description
        // ]); 

        $item_name = $request->item_name;
        $item_category = $request->item_category;
        $item_price = $request->item_price;
        $item_description = $request->item_description;
        $item_image = $request->file('item_image');
        $image_name = time().'.'.$item_image->extension();
        $item_image->move(public_path('images').$image_name);
       

        $menus = new Menu();
        $menus->item_name = $item_name;
        $menus->item_image = $item_image;
        $menus->item_category = $item_category;
        $menus->item_price = $item_price;
        $menus->item_description = $item_description;

        $menus->save();
         return redirect('manageMenu')->with('success','Category Added successfully!');
    }

    // show class for read data
    public function showmenu(Request $request){
        $get_menu = Menu::orderBy('id', 'desc')->get();
        $total_menu = Menu::count();
        return view('admin.manageMenu', compact('get_menu', 'total_menu'));

    }
}

    