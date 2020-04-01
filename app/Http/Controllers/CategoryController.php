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
            'name' => 'required',
            'date'=> 'required'
        ]);
        $category = new Category;


        $category->name = $request->input('name');
        $category->date = $request->input('date');
        $category->save();

        return redirect ('/category')->with('response','Category Added Successfully!!!');
    }
}
