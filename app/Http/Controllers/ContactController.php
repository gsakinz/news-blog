<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prayer;
use Auth;

class ContactController extends Controller
{
    public function contact_us()
    {
        return view('contacts.contact');
    }
    public function prayer(Request $request)
    {
        $this->validate($request,[
            'prayer' => 'required',
            'name',
            'email',
            'user_id',
            'telephone',
        ]);
        $prayer = new Prayer;
        $prayer->prayer = $request->input('prayer');
        $prayer->user_id = Auth::user()->user_id;
        $prayer->email = Auth::user()->email;
        $prayer->name = Auth::user()->name;
        $prayer->telephone = Auth::user()->telephone;

        $prayer->save();
        return redirect ('/contact_us')->with('prayer_response','Prayer Request Sent !!!');
    }
}
