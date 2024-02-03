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
}
