<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Menu;
use Illuminate\Http\Request;
use Image;
use Log;

class MenuController extends Controller
{
    public function insertmenu(Request $request)
    {
        $request->validate([
            'item_name' => 'required|unique:menus',
            'item_image' => '',
            'item_category' => 'required',
            'item_price' => 'required',
            'item_description' => 'required',
        ]);
        // Menu::insert([
        //     'item_name' => $request->item_name,
        //     'item_image' => $request->item_image,
        //     'item_category' => $request->item_category,
        //     'item_price' => $request->item_price,
        //     'item_description' => $request->item_description
        // ]); 

        $item_name = $request->item_name;

        Log::info($item_name);
        
        $item_category = $request->item_category;
        $item_price = $request->item_price;
        $item_description = $request->item_description;
        $item_image = $request->file('item_image');
        $image_name = time().'.'.$item_image->extension();

        $menus = new Menu();

        $menus->item_name = $item_name;
    
        $menus->item_category = $item_category;
        $menus->item_price = $item_price;
        $menus->item_description = $item_description;

        $menus->save();
        
        if ($request->hasFile('item_image')) {
            $path = public_path() . '/' . config('iideadrive.menu_images');
            Log::info($path);
            $filename = 'menu_image_' . $menus->id . '.' . strtolower($request->file('item_image')->getClientOriginalExtension());

            $file_full_path = $path . '/' . $filename;

            $request->file('item_image')->move($path, $filename);

            \Storage::put(config('iideadrive.menu_images') . '/' . $filename, file_get_contents($file_full_path));
        }
        $menus->item_image = config('iideadrive.menu_images') . '/' . $filename;
        $menus->save();

        
         return redirect('manageMenu')->with('success','Category Added successfully!');
    }

    // show class for read data
    public function showAdminMenu(Request $request){
        $menu_list = Menu::orderBy('id', 'desc')->get();
        $total_menu = Menu::count();
        return view('admin.manageMenu', compact('menu_list', 'total_menu'));
    }
    /**
     * show menu page
     * @param  Request $request http request
     */
    public function showMenu(Request $request)
    {
        return view('client.menu');
    }
}
