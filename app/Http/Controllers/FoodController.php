<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FoodController extends Controller
{
   

    public function manageFood()

    {
        $i = 1;
        $eatery = Food::all();
        return view('admin.manage-food', compact('eatery', 'i'));
    }

    public function addFood()

    {

        $food = Category::all();
        return view('admin.add-food', compact('food'));
    }

    public function storeFood(Request $request)

    {
       $eatery = Food::all();;
      
        $newImageName = time() . '-' . $request->title . '.' . $request->image_name->extension();
        $request->image_name->move(public_path('images'), $newImageName);
        $i = 1;
        $food = new Food;
        $food->title = $request->input('title');
        $food->description = $request->input('description');
        $food->price = $request->input('price');
        $food->image_name = $newImageName;
        $food->category_id = $request->input('category');
        $food->featured = $request->input('featured');
        $food->active = $request->input('active');
        $food->save();
        return view('admin.manage-food' , compact('eatery', 'i'))->with('success', 'Product was added succesfully');
    }

    public function deleteFood($id)
    {
        $id = Food::find($id);
        $path = 'images/' . $id->image_name;

        $id->delete();
        File::delete($path);
        return redirect('manage-food')->with('success', 'deleted was added succesfully');;;
    }
    public function searchFood()
    {
        $search_text = $_GET['search'];
        $foodSearch = Food::where('title', 'LIKE', '%' . $search_text . '%')->get();
        
        return view('pages.food-search', compact('foodSearch'));
    }

    public function FoodCategory($id)
    {
        $category_id = Category::find($id);
        $foodCategory = FOOD::all()->where('category_id', $category_id['id']);
        return view('pages.food-category', compact('foodCategory','category_id'));
    }

    public function foodOrder($id)
    {
        $id = Food::find($id);

        $orders = Food::all()->where('id',$id['id']);
        return view('pages.order', compact('orders'));
    }

    public function cart()
    {
        
        return view('pages.cart');
    }

    public function addToCart(Request $request)
    {

         $id = $request->input('food_id');
         
         $food = Food::findOrFail($id);  


         $cart = session()->get('cart');
  
            $cart[$id] = [
                "name" => $food->title,
                "quantity" => 1,
                "price" => $food->price,
                "image" => $food->image_name
            ];
        $session = session()->put('cart', $cart);
        echo json_encode($session);
    
    //    return redirect()->back()->with('success', 'Product added to cart successfully!');
      

    }
   
}


