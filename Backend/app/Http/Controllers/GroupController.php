<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return response()->json(["data" => $groups], 200);
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
        // $group = new Group();
        // $group->zone_name = $request->zone_name;
        // $group->save();
        
        Group::create([
            "zone_name" => $request->zone_name,
        ]);
        return response()->json(["message" => "Group created successfull"], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groups=Group::find($id);
        return response()->json(["data"=>$groups],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $groups= Group::find($id);
        $message ="";
        if($groups==null){
            $message="group with $id not found";
            return response()->json(["message"=>$message],404);
        }
        else{
            $groups->delete();
            return response()->json(["message"=>"group deleted"],200);
        }
    }
}
