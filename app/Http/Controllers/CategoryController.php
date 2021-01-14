<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // insert class for inserting data
     public function insert(Request $request){
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
        ]);
        Category::insert([
            'name' => $request->name,
            'description' => $request->description
        ]); 
         return redirect('showcategory')->with('success','Category Added successfully!');
    }

    // show class for read data
    public function show(Request $request){
        $category = Category::orderBy('id', 'desc')->get();
        $total_cat = Category::count();
        return view('admin.showcategory', compact('category', 'total_cat'));

    }

    // delete class for deleting data
    public function destroy($id){
        $data = Category::find($id);
        $data->delete();
        return back()->with('success','Category Deleted successfully!');
        // return redirect('showcategory');
    }

    // edit class for editing data
    public function edit($id){
        $data =  Category::find($id);
        return view('admin.editcategory' , ['data'=>$data]);
       
    }
    
       public function newUpdate(Request $request){
        $data =  Category::find($request->id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect('showcategory')->with('success','Category Updated successfully!');
       
    }


}