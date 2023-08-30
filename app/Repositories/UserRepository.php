<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
    public function ignore(){
        return $this->model->whereNotIn('id', [Auth::user()->id])->get();
    }
}
