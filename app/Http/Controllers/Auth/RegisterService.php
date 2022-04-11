<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Admin\Auth\Request\LoginRequest;
use App\Http\Controllers\Auth\Request\RegisterRequest;
use App\Models\User\User;
use App\Models\User\UserRepository;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function verifyEmail(string $email): bool
    {
        $this->userRepository->
    }

    public function register(RegisterRequest $request): View
    {
        $user = new User();
        $user->setName($request->getName());
        $user->setPassword(Hash::make($request->getPassword()));
        $user->setEmail($request->getEmail());

        $this->userRepository->add($user);

        return view('auth.registerComplete');
    }
}
