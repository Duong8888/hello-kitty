<?php

namespace App\Services;

use App\Providers\RouteServiceProvider;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Response;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Socialite\Facades\Socialite;

class UserService
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login()
    {
        $data = Socialite::driver('google')->user();
        if ($this->userRepository->findColumn('google_id', $data->getId())) {
            $user = $this->userRepository->findColumn('google_id', $data->getId());
        } else {
            // tạo mới tài khoản nếu người dùng đăng nhập lần đầu
            $dataUser = [
                'name' => $data->getName(),
                'google_email' => $data->getEmail(),
                'avatar' => $data->getAvatar(),
                'google_id' => $data->getId(),
                'google_token' => $data->token,
            ];
            $user = $this->userRepository->create($dataUser);
        }
        Auth::login($user);
        \session()->put('avatar', $data->getAvatar());
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
