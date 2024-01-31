<?php

namespace App\Http\Controllers;


use App\Events\ChatMessageSent;
use App\Models\ChatMessages;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function createChat(Request $request){
      $message=ChatMessages::create([
        "envoi_id"=>$request->envoi_id,
        "recu_id"=>$request->recu_id,
        "message"=>$request->message
      ]);

      broadcast(new ChatMessageSent($request->message));
      return response()->json(["message"=>$message],200);
    }


    public function getMessages(Request $request){
        $messages=ChatMessages::where("envoi_id",$request->envoi_id)
                              ->where("recu_id",$request->recu_id)
                              ->Orwhere("recu_id",$request->envoi_id)
                              ->where("envoi_id",$request->recu_id)->get();

        return response()->json(["message"=>$messages],200);
    }

   

    public function searchUsers(Request $request){
        $users = User::where('email','like',"%{$request->email}%")->limit(3)->get();
        return response()->json( [
            'users'=> $users ,
        ],200);
    }
}
