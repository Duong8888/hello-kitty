<?php

namespace App\Services;

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
            $data = [
                'name' => $data->getName(),
                'google_email' => $data->getEmail(),
                'avatar' => $data->getAvatar(),
                'google_id' => $data->getId(),
                'google_token' => $data->token,
            ];
            $user = $this->userRepository->create($data);
        }
        $token = $user->createToken('api-token')->plainTextToken;
        $token = explode('|', $token);
        return [
            'user' => $user,
            'token' => $token[1],
        ];
    }

    public function logout()
    {
        $user = Auth::user();
        $user->currentAccessToken()->delete();
        return \response()->json([], Response::HTTP_OK);
    }
}
