<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Admin\Auth\Request\LoginRequest;
use App\Http\Controllers\Auth\Request\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\User\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = new User();
        $user->setName($request->getName());
        $user->setPassword(Hash::make($request->getPassword()));
        $user->setEmail($request->getEmail());

        $this->userRepository->add($user);

        return redirect('/login')->with(['registerResult', true]);
    }
}
