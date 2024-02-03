<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getNotif(Request $request)
    {
           $messages=Notifications::where("recu_id",$request->input('recu_id'))->get();
        // $messages = Notifications::all();

        return response()->json(["data" => $messages], 200);
    }
    public function deleteNotif(string $id)
    {
        $users = Notifications::find($id);
        
        $users->delete();
        return response()->json(["message" => "notification deleted"], 200);
        
    }
}
