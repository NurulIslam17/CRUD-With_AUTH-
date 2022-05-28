<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Crud;
use Session;

class CrudController extends Controller
{
    public function showData()
    {
        $showData = Crud::simplePaginate(5);
        return view('show',compact('showData'));
    }
    public function formData()
    {
        return view('form');
    }


    public function storeData(Request $request){

     $validated = $request->validate([
         'name'=>'required|max:20',
         'email'=>'required|email',
         'city'=>'required',
         'country'=>'required', 
     ]);

     $crud = new Crud();
     $crud->name = $request->name;
     $crud->email = $request->email;
     $crud->city = $request->city;
     $crud->country = $request->country;
     $crud->save();
     Session::flash('msg','Data inserted successfull...');
     return redirect('/');
 }


//######################## Edit and Update #################################
 public function editData($id)
 {
    $selectId = Crud::find($id);
    return view('edit',compact('selectId'));
}
public function updateData(Request $request,$id){

 $validated = $request->validate([
     'name'=>'required|max:20',
     'email'=>'required|email',
     'city'=>'required',
     'country'=>'required', 
 ]);

 $crud = Crud::find($id);
 $crud->name = $request->name;
 $crud->email = $request->email;
 $crud->city = $request->city;
 $crud->country = $request->country;
 $crud->save();
 Session::flash('msg','Data updated successfull...');
 return redirect('/');
}


        //############################ delete Data ############################

    public function deleteData($id)
    {
        $deleteId = Crud::find($id);
        $deleteId->delete();
        Session::flash('msg','Data Deleted successfull...');
        return redirect('/');
    }
} 

