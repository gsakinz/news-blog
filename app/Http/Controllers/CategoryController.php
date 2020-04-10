<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function category()
    {
        return view('categories.category');
    }
    public function addCategory(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required',
        ]);
        $category = new Category;
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect ('/category')->with('response','Category Added Successfully!!!');
    }

}
