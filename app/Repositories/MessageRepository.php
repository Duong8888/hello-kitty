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
            ->whereRaw('(user_id = ? AND recipient_id = ?) OR (user_id = ? AND recipient_id = ?)',
                [$idSend, $idRecipient, $idRecipient, $idSend])
            ->orderBy('created_at','ASC')->get();
    }
}
