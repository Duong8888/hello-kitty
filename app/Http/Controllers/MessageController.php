<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Services\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $messageService;
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function getMessage(){
        $idSend = auth()->id();
        $idRecipient = '2';
        $data = $this->messageService->loadMesage($idSend, $idRecipient);
        return response()->json($data);
    }

    public function sendMessage(MessageRequest $request){
        return $this->messageService->send($request);
    }
}
