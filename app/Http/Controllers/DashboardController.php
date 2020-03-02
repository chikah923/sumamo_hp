<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class DashboardController extends BaseController
{
    function index(){
    	return view('dashboard.index');
    }

    public function profile()
    {
        $user = auth()->user();

        return view('dashboard.profile')->with('user', $user);
    }

    public function updateProfile(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        ($request->auth2fa) ? $user->auth2fa = $request->auth2fa : $user->auth2fa = false;

        if($request->oldpassword)
        {
            $request->validate([
                'password' => 'required|confirmed',
            ]);

            if(Hash::check($request->oldpassword, $user->password))
            {
                $user->password = Hash::make($request->password);
            }
            else
            {
                session()->flash('error', 'Your password is incorrect');
                return redirect()->back();
            }
        }

        $user->save();

        session()->flash('success', 'Profile updated!');
        return redirect()->back();
    }


}
