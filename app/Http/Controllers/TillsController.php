<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Tills;
use Illuminate\Http\Request;

class TillsController extends Controller
{
    //insert tills in database
    public function insertTills(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'till_operator' => 'required',
            'order_in_queue' => 'required',
            'order_delivered' => 'required',
            'last_order_delivered' => 'required',
        ]);
        Tills::insert([
            'name' => $request->name,
            'status' => $request->status,
            'till_operator' => $request->till_operator,
            'order_in_queue' => $request->order_in_queue,
            'order_delivered' => $request->order_delivered,
            'last_order_delivered' => $request->last_order_delivered,
            
        ]); 
         return redirect('manageTills')->with('success','Tills Added successfully!');
    }

    //show tills in blade
    public function manageTills(Request $request){
        // show class for read data
        $tills = Tills::orderBy('id', 'desc')->get();
        $total_tills = Tills::count();
        return view('admin.manageTills', compact('tills', 'total_tills'));
    }


    // edit tills
    public function editTills( $id)
    {   $tillData =  Tills::find($id);
        return view('admin.edittill' , ['tilldata'=>$tillData]);
    }


    // updating the tills after editing
    public function updateTills(Request $request){
        $data =  Tills::find($request->id);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->save();
        return redirect('manageTills')->with('success','Category Updated successfully!');
       
    }

    // deleting Tills
    public function deleteTills($id){
        $data = Tills::find($id);
        $data->delete();
        return back()->with('success','Category Deleted successfully!');
        // return redirect('showcategory');
    }




}