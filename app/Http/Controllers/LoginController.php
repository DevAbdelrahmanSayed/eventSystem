<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');

    }
    public function __invoke(LoginRequest $request)
    {
        if (Auth::attempt($request->only('un_id', 'password'))) {
            $request->session()->regenerate();
            session(['success' => 'You have logged in successfully As '.Auth::user()->type]);
            return response()->json(['redirectTo' => route('dashboard.index')]);
        }
        return response()->json(['error' => 'The provided credentials do not match our records.'], 422);
    }

}
