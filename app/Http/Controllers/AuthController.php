<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if($user){
            $request->merge(['email' => $user->email]);
        }else{
            $request->merge(['email' => $request->username]);
        }
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'El formato de correo electrónico es inválido.',
            'password.required' => 'El campo de contraseña es obligatorio.'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
        }
        $user = User::where('email',$request->email)->first();
        if(!$user){
            $validator->errors()->add('password', 'Las credenciales proporcionadas son incorrectas.');
            return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
        }
        
        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->route('dashboard');
        } else {
            $validator->errors()->add('password', 'Las credenciales proporcionadas son incorrectas.');
            return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
