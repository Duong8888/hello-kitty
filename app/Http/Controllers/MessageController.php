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

    public function getMessage(Request $request){
        $data = $this->messageService->loadMesage(auth()->id(), $request->recipient_id);
        return response()->json($data);
    }

    public function sendMessage(MessageRequest $request){
        return $this->messageService->send($request);
    }
}
