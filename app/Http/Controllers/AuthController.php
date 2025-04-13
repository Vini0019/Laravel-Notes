<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(loginRequest $request)
    {

        dd($request->all());
    }

    public function logout()

    {
        echo 'login';
    }
}
