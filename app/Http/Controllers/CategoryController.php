<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public $Category;

    public function addCategory()
    {
        return view('admin.add-category');
    }

    public function manageCategory()
    {
       
        $category = Category::all();
        return view('admin.manage-category', compact('category'))->with('i', (request()->input('page', 1)));
    }

    public function storeCategory(Request $request)
    {

        $newImageName = time() . '-' . $request->title . '.' . $request->image_name->extension();

        $request->image_name->move(public_path('images'), $newImageName);

        $category = new Category;
        $category->title = $request->input('title');
        $category->image_name = $newImageName;
        $category->featured = $request->input('featured');
        $category->active = $request->input('active');
        $category->save();
        return redirect('manage-category')->with('success', 'Product was added succesfully');
    }

    public function deleteCategory($id)
    {
        $id = Category::find($id);
        $path = 'images/' . $id->image_name;

        $id->delete();
        File::delete($path);
        return redirect('manage-category')->with('success', 'deleted was added succesfully');;;
    }
}
