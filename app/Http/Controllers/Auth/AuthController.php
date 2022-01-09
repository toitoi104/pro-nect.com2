<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\Request\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        $authInfo = $request->only('email', 'password');

        if (Auth::guard('user')->attempt($authInfo, false)) {
            return redirect('/');
        }

        return redirect('/login');
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('user')->logout();
        return redirect('/login');
    }
}
