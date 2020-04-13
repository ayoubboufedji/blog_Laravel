<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerificationTokenController extends Controller
{
    public function verifytoken() {


        return view('auth.passwords.verificaionToken');

    }
}
