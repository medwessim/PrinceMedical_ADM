<?php

namespace App\Http\Controllers;

use App\Models\JobPosition;
use App\Http\Requests\StoreJobPositionRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateJobPositionRequest;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts= JobPosition::all();
        return response()->json(["data"=>$posts],200);
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
        JobPosition::create([
            "job_name" => $request->job_name,
        ]);
        return response()->json(["message" => "Post created successfull"], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts=JobPosition::find($id);
        return response()->json(["data"=>$posts],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPosition $jobPosition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobPositionRequest $request, JobPosition $jobPosition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $posts= JobPosition::find($id);
        $message ="";
        if($posts==null){
            $message="group with $id not found";
            return response()->json(["message"=>$message],404);
        }
        else{
            $posts->delete();
            return response()->json(["message"=>"post deleted"],200);
        }
    }
}
