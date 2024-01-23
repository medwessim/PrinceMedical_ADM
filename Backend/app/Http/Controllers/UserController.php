<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::all();
        return response()->json(["data"=>$users],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::created([
            "name"=>$request->name,
            "lastName"=>$request->lastName,
            "userName"=>$request->userName,
            "password"=>$request->password,
            "photo"=>$request->photo,
            "num_tlf"=>$request->num_tlf

        ]);
        return response()->json(["message"=>"added successfully"],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::find($id);
        return response()->json(["data"=>$user],200);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::find($id);
            

        $user->update([
            "name"=>$request->name,
            "lastName"=>$request->lastName,
            "userName"=>$request->userName,
            "password"=>$request->password,
            "photo"=>$request->photo,
            "num_tlf"=>$request->num_tlf
        ]);
      
    
        return response()->json(["message"=>"UpDate successfully"],200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users= User::find($id);
        $message ="";
        if($users==null){
            $message="user with $id not found";
            return response()->json(["message"=>$message],404);
        }
        else{
            $users->delete();
            return response()->json(["message"=>"user deleted"],200);
        }
    }
}
