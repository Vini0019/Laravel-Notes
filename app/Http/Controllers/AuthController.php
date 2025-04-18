<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(loginRequest $request)
    {
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        $user = User::where('username', $username)->where('deleted_at', null)->first();

        if (!$user) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Usuário ou senha inconterretos');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Usuário ou senha inconterretos');
        }

        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'username' => $user->username
            ]
        ]);

        return redirect()->to('/');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->to('/login');
    }
}
