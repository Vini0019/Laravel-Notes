<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        return view ('login', [
            'request' => $request
        ]);
    }

    public function logout()

    {
        echo 'login';
    }
}
