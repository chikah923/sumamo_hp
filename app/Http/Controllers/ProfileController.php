<?php

namespace App\Http\Controllers;

//use Illuminate\Routing\Controller as BaseController;


use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;

class ProfileController extends Controller
{
    use MediaUploadingTrait;

    function myProfile(){
    	return view('profile.my-profile');
    }


    function update(Request $request)
    {
        //dd($request->input());
        $user = auth()->user();

        if($user->profile)
        {
            //update
            $profile = $user->profile;
            $profile->update($request->except('photo'));



            if ($request->file('photo'))
            {
                if($profile->photo)
                {
                    $profile->photo->delete();
                    $profile->addMedia($request->file('photo'))->toMediaCollection('photo');
                }
                elseif(!$profile->photo)
                {
                    $profile->addMedia($request->file('photo'))->toMediaCollection('photo');
                }
            }
        }

        if (!$user->profile)
        {
            $profile = $user->profile()->create($request->all());

            if($request->file('photo'))
                {
                    $profile->addMedia($request->file('photo'))->toMediaCollection('photo');
                }
        }

        return redirect()->route('dashboard.profile');

    }


}
