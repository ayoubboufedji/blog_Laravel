<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;



class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

/**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }



   /* public function postforgot(Request $request) {
        $this->validate($request,[
            'email'=>'required|email|exists:users',
         ]);

         $user=User::whereEmail($request->email)->first();
         //dd($user);

         if($user->active ===false){

            return redirect()->back()->with('error', 'Email.............');
         }else{
                $user->update([
                            'activation_token'=>rand(100000,999999),
                ]);
          // dd($user);
            return redirect('verifytoken')->with('success','..........email...........');
         }

    }*/
}
