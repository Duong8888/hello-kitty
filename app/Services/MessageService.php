<?php

namespace App\Services;

use App\Repositories\MessageRepository;

class MessageService
{
    protected $messageRepository;
    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }


}