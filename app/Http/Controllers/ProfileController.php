<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input;
use Illuminate\support\facades\File;
use Illuminate\support\facades\Url;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\User;
use Auth;

class ProfileController extends Controller
{
     /**
     * Show the profile dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
public function profilesetup(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'user_id',
            'email' => 'required',
            'department' => 'required',
            'date' => 'required',
            'designation' => 'required',
            'profile_pic' => 'required',
            'telephone' => 'required',
        ]);

        $profiles = new Profile;
        $profiles->name = $request->input('name');
        $profiles->user_id = Auth::user()->user_id;
        $profiles->email = $request->input('email');
        $profiles->department = $request->input('department');
        $profiles->date = $request->input('date');
        $profiles->designation = $request->input('designation');
        $profiles->profile_pic = $request->input('profile_pic');
        $profiles->telephone = $request->input('telephone');


        if(Input::hasFile('profile_pic'))
        {
            $file = Input::file('profile_pic');
            $file->move(public_path().'/uploads',
            $file->getClientOriginalName());
            $url = URL::to('/').'/uploads/'.$file->getClientOriginalName();
        }

        $profiles->profile_pic = $url;
        $profiles->save();
        return redirect ('/profile')->with('response','Profile Added Successfully !!!');
    }



    public function settings()
    {
        return view('profiles.profile');
    }

    public function profile()
    {

        $user_id = Auth::user()->user_id;
        $profile = DB::table('users')
                ->join('profiles', 'users.user_id', '=', 'profiles.user_id' )

                ->select('users.*', 'profiles.*')

                ->where(['profiles.user_id' => $user_id])

                ->first();


        return view('/profiles.profile-update', ['profile' => $profile]);

    }
}
