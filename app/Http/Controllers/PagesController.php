<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $category = Category::paginate(3);
        $foodIndex = Food::paginate(2);
        return view('pages.index', compact('category','foodIndex'));
      
    }

     public function categories()
    {
        $category = Category::all();
        return view('pages.categories', compact('category'));
        
    }


    public function foodCategory()
    {
        return view('pages.food-category');
    }


    public function foodSearch()
    {
        return view('pages.food-search');
    }

    public function food()
    {
        $foodPage = Food::all();
        return view('pages.food', compact('foodPage'));
     
    }


    public function order()
    {
        return view('pages.order');
    }

    public function success()
    {
        return view('pages.success');
    }
    
    
}
