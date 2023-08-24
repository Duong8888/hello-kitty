<?php

namespace App\Repositories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;

class MessageRepository extends BaseRepository
{
    public function __construct(Message $message)
    {
        parent::__construct($message);
    }

    public function getDetailMessage($idSend, $idRecipient)
    {
        return Message::query()
                ->where('user_id', $idSend)
                ->where('recipient_id', $idRecipient)
                ->get();
    }
}
