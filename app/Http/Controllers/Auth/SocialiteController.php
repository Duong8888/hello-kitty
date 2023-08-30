<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    protected $userSevice;
    public function __construct(UserService $userService)
    {
        $this->userSevice = $userService;
    }

    public function redirectSocialite(){
        return Socialite::driver('google')->redirect();
    }
    public function handleCallback(){
        $this->userSevice->login();
        return redirect()->route('chat.detail');
    }
}
