<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\Request\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        $authInfo = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($authInfo, false)) {
            return redirect('/');
        }

        return redirect('/login');
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }
}
