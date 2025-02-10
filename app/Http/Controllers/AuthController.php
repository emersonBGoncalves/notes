<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:16',
        ],[
            'email.required' => 'O Email é obrigatório',
            'email.email' => 'O Email deve ser um email válido',
            'password.required' => 'A Senha é obrigatória',
            'password.min' => 'A senha deve ter pelo menos :min caracteres',
            'password.max' => 'A senha deve ter no máximo :max caracteres',
        ]);

        $email = $request->email;
        $password = $request->password;

        dd($request, $request->all());
    }

    public function logout()
    {
        return view('logout');
    }
}
