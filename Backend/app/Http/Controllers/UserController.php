<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        // $users = User::all();
        $excludedUserIds = [$id];
        $users = User::whereNotIn('id', $excludedUserIds)->get();
        return response()->json(["data" => $users], 200);
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
        $file_name = time() . '_' . $request->photo->getClientOriginalName();
        $image = $request->file('photo')->storeAs('images', $file_name, 'public');
        User::create([

            "name" => $request->name,
            "lastName" => $request->lastName,
            "userName" => $request->userName,
            "password" => bcrypt($request->password),
            // "photo"=>"abc",
            "photo" => '/storage/' . $image,
            "num_tlf" => $request->num_tlf,
            "isAdmin" => 0,
            'status' => 'active',
            "group_id" => $request->group_id,
            "jobposition_id" => $request->jobposition_id

        ]);
        return response()->json(["message" => "added successfully"], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        
        return response()->json(["data" => $user], 200);
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
   
        $user = User::find($id);
        if ($user) {
            if ($request->avatarupload == 1) {
                $file_name = time() . '_' . $request->photo->getClientOriginalName();
                $image = $request->file('photo')->storeAs('images', $file_name, 'public');
                $user->update([
                    "name" => $request->name,
                    "lastName" => $request->lastName,
                    "userName" => $request->userName,
                    "password" => $request->password,
                    "num_tlf" => $request->num_tlf,
                    "group_id" => $request->group_id,
                    "jobposition_id" => $request->jobposition_id,
                    "photo" => '/storage/' . $image,
                    'status' => 'active'
                ]);
            } else {
                $user->update([
                    "name" => $request->name,
                    "lastName" => $request->lastName,
                    "userName" => $request->userName,
                    "password" => $request->password,
                    "num_tlf" => $request->num_tlf,
                    "group_id" => $request->group_id,
                    'status' => 'active',
                    "jobposition_id" => $request->jobposition_id
                ]);

            }
            return response()->json(['data' => $user], 200);
        } else {
            return response()->json(['data' => "Not Found"], 200);
        }
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $message = "";
        if ($users == null) {
            $message = "user with $id not found";
            return response()->json(["message" => $message], 404);
        } else {
            $users->delete();
            return response()->json(["message" => "user deleted"], 200);
        }
    }
}
