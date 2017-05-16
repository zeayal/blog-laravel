<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function getRegister()
    {
        return view('blog.auth.register');
    }

    public function postRegister()
    {

    }
}
