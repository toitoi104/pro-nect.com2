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

    /**
     * @var RegisterService
     */
    private $registerService;

    public function __construct(
        UserRepository $userRepository,
        RegisterService $registerService
    ){
        $this->userRepository = $userRepository;
        $this->registerService = $registerService;
    }

    public function register(RegisterRequest $request)
    {
        $email = $request->getEmail();
        $name = $request->getName();

        if($this->registerService->existEmail($email)){
            return back()->withErrors(['email' => 'このメールアドレスは登録済みです']);
        }

        if($this->registerService->existName($name)){
            return back()->withErrors(['name' => 'この名前は登録済みです']);
        }

        $user = new User();
        $user->setName($name);
        $user->setPassword(Hash::make($request->getPassword()));
        $user->setEmail($email);

        $this->userRepository->add($user);

        return view('auth.registerComplete');
    }
}
