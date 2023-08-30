<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Services\MessageService;
use App\Services\UserService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $messageService;
    protected $userSevice;
    public function __construct(MessageService $messageService,UserService $userService)
    {
        $this->messageService = $messageService;
        $this->userSevice = $userService;
    }

    public function getMessage(Request $request){
        $data = $this->messageService->loadMesage(auth()->id(), $request->recipient_id);
        return response()->json($data);
    }

    public function showDetail(){
        $data = $this->userSevice->getUsers();
        return view('chat.detail',compact('data'));
    }

    public function sendMessage(MessageRequest $request){
        return $this->messageService->send($request);
    }
}
