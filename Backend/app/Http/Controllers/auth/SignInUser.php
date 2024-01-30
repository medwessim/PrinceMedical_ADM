<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInUser extends Controller
{
    public function SignInUser(Request $request)
{
    if (Auth::attempt(['userName' => $request->userName, 'password' => $request->password])) {
        $user = Auth::user();
        $token = $user->createToken('api_token')->plainTextToken;
        
        $response = [
            'token' => $token,
            'user' => $user,
            'isAdmin' => $user->isAdmin
        ];
        
        return response()->json(['data' => $response], 200);
    } else {
        return response()->json(['data' => "Utilisateur non trouvé", 'status' => "user"], 401);
    }
}

}
