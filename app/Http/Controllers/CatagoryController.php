<?php

namespace App\Http\Controllers;
use App\Models\catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function register()
  {
  return view('catagory.register');
  }
    function store(Request $request)
    
    {
      $catagory =new catagory();
      $catagory->id = $request->id;
      $catagory->name = $request->name;
     
     $is_saved = $catagory->save();
    if($is_saved){
    echo "Record saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $catagory = catagory::all();
     return view('catagory.list', compact('catagory'));
    } 
}
