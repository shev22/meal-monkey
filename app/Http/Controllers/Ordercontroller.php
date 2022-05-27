<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
   public function addOrder(Request $request)
   {

    $total = $request->input('qty') * $request->input('price');;

    $admin = new Order;
    $admin->food = $request->input('title');
    $admin->price = $request->input('price');
    $admin->qty = $request->input('qty');
    $admin->total =$total;
    $admin->order_date = date("Y-m-d h:i:sa");
    $admin->status = "ordered";
    $admin->customer_name = $request->input('name');
    $admin->customer_contact = $request->input('contact');
    $admin->customer_email = $request->input('email');
    $admin->customer_address = $request->input('address');
    $admin->save();
    return redirect('/pages.success')->with('success', 'Product was added succesfully');
   }

}


