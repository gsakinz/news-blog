<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input;
use Illuminate\support\facades\File;
use Illuminate\support\facades\Url;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Post;
use App\User;
use Auth;

class PostController extends Controller
{
    public function post()
    {
        $categories = Category::all();
        return view('posts.post',['categories' => $categories]);
    }


    public function addPost(Request $request)
    {
        $this->validate($request,
        [
            'post_body' => 'required',
            'post_tittle' => 'required',
            'category_name' => 'required',
            'post_image' => 'required',
            'user_id',
        ]);
        $posts = new Post;
        $posts->post_body = $request->input('post_body');
        $posts->user_id = Auth::user()->user_id;
        $posts->post_tittle = $request->input('post_tittle');
        $posts->category_name = $request->input('category_name');
        $posts->post_image = $request->input('post_image');


        if(Input::hasFile('post_image'))
        {
            $file = Input::file('post_image');
            $file->move(public_path().'/post-images',
            $file->getClientOriginalName());
            $url = URL::to('/').'/post-images/'.$file->getClientOriginalName();
        }

        $posts->post_image = $url;
        $posts->save();
        return redirect ('/addpost')->with('post_response','Post Added Successfully !!!');
    }

    public function postsettings()
    {

        $user_id = Auth::user()->user_id;
        $post = DB::table('users')
                ->join('posts', 'users.user_id', '=', 'posts.user_id' )

                ->select('users.*', 'posts.*')

                ->where(['posts.user_id' => $user_id])

                ->first();


        return view('/posts.post', ['post' => $post]);

    }

}










// public function addPost(Request $request)
//     {
//         $this->validate($request,[
//             'post_body' => 'required',
//             'post_tittle' => 'required',
//             'category_id' => 'required',
//             'post_image',
//             'user_id',
//         ]);
//         $addPost = new Post;
//         $addpost->post_body = $request->input('post_body');
//         $addpost->post_tittle = $request->input('post_tittle');
//         $addpost->category_id = $request->input('category_id');
//         $addpost->post_image = $request->input('post_image');
//         $addpost->user_id = Auth::user()->user_id;

//         $addpost->save();
//         return redirect ('/home')->with('post_response','Post Added Successfully');
//     }
