<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class otpController extends Controller
{
    public function reauthenticate(Request $request)
    {
        // get the logged in user
        $user = \Auth::user();

        // initialise the 2FA class
        $google2fa = app('pragmarx.google2fa');

        // generate a new secret key for the user
        $user->google2fa_secret = $google2fa->generateSecretKey();

        // save the user
        $user->save();

        // generate the QR image
        $QR_Image = $google2fa->getQRCodeInline(
            config('app.name'),
            $user->email,
            $user->google2fa_secret
        );

        // Pass the QR barcode image to our view.
        return view('google2fa.register', [
            'QR_Image' => $QR_Image,
            'secret' => $user->google2fa_secret,
            'reauthenticating' => true
        ]);
    }
}
