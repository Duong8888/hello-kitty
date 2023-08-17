<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class MessageRepository extends BaseRepository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}
