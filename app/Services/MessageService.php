<?php

namespace App\Services;

use App\Events\NewMessageEvent;
use App\Repositories\MessageRepository;
use App\Repositories\UserRepository;

class MessageService
{
    protected $messageRepository;
    protected $userRepository;

    public function __construct(MessageRepository $messageRepository,UserRepository $userRepository)
    {
        $this->messageRepository = $messageRepository;
        $this->userRepository = $userRepository;
    }

    public function loadMesage($idSend, $idRecipient)
    {
        $dataMessage = $this->messageRepository->getDetailMessage($idSend, $idRecipient);
        $dataUser = $this->userRepository->all();
        return [
            'user' => $dataUser,
            'message' => $dataMessage,
        ];
    }

    public function send($request)
    {
        $data = [
            'user_id' => $request->user_id,
            'message' => $request->message,
            'recipient_id' => $request->recipient_id,
        ];
        event(new NewMessageEvent($request->message,$data['recipient_id']));
        return $this->messageRepository->create($data);
    }

}
