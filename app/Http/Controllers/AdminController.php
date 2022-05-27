<?php

namespace App\Http\Controllers;



use App\Models\Food;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;



class AdminController extends Controller
{

    public $orderLists;


    public function index()
    {
        $category = count(Category::all());
        $food = count(Food::all());
        $this->manageOrder();
        $total_orders = count($this->orderLists);
        
        $total_revenue = Order::sum('total');

        return view('admin.admin', compact('total_orders', 'category', 'food', 'total_revenue'));
    }

    public function addAdmin()
    {

        return view('admin.add-admin');
    }
    public function manageAdmin()
    {

        $administrators = Admin::all();
        return view('admin.manage-admin', compact('administrators'))->with('i', (request()->input('page', 1)));
    }



    public function manageOrder()
    {
        $i = 1;
        $orderLists = $this->orderLists = Order::all();
        return view('admin.manage-order', compact('orderLists', 'i'));
    }
    public function deleteOrder($id)
    {
        $id =  Order::find($id);
        $id->delete();
        return redirect('manage-order');
    }


    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->full_name = $request->input('full_name');
        $admin->username = $request->input('username');
        $admin->password = $request->input('password');
        $admin->save();
        return redirect('manage-admin')->with('success', 'Product was added succesfully');
    }

    public function deleteAdmin($id)
    {
        $id = Admin::find($id);
        Admin::where('id', '=', $id['id'])->delete();
        return redirect('manage-admin')->with('success', 'deleted was added succesfully');;;
    }

    public function updateAdmin($id)
    {

        $administrator = Admin::find($id);
        return view('admin.update-admin')->with('administrator', $administrator);
    }

    public function editAdmin(Request $request, $id)
    {
        $admin =  Admin::find($id);
        $admin->full_name = $request->input('full_name');
        $admin->username = $request->input('username');
        $admin->update();
        return redirect('manage-admin')->with('success', 'Product was added succesfully');
    }

    public function updatePassword()
    {

        return view('admin.update-password');
    }


    public function adminLogin()
    {
        return view('auth.admin-login');
    }

    public function check(Request $request)
    {

        $userInfo = Admin::where('username', '=', $request->email)->first();

        if ($userInfo) {
            $request->session()->put('LoggedUser', $userInfo->id);
            return redirect('admin');
        } else {
            return 'error!';
        }
    }
    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
