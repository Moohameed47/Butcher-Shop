<?php

namespace App\Http\Controllers;


use App\Models\Company;
use App\Requests\Users\LoginValidator;
use App\Requests\Users\RegisterValidator;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuth extends Controller
{
    public function register(RegisterValidator $registerValidator, UserService $userService)
    {
        $user = $userService->createUser($registerValidator->request()->all());
        $credentials = $registerValidator->request()->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
    }

    public function login(LoginValidator $loginValidator)
    {
        $request = $loginValidator->request();
        if (Auth::attempt($request->only(['email', 'password']), $request->get('remember'))) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            } elseif (Auth::user()->role == 'blocked') {
                Session::flush();
                Auth::logout();
                return back()->withErrors(['email' => 'You are blocked from system']);
            } else {
                return redirect('/home');
            }
        } else {
            return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Data Not Matched our records1']);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
