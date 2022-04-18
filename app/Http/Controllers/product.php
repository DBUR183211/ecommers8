<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function register()
        
        {
            return view('product.register');
        }
public function store(requst $requst){
$product =new product();
$product->name=$request->name;
$product->unit=$request->unit;
$product->price=$request->price;
$product->quntity=$request->quantity;
$is_suceessed=$product::save();
if($is_suceessed)
echo"record saved suceessfullyu";
else
echo "some thing went wrong try again#";


    //
}
