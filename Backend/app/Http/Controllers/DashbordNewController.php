<?php

namespace App\Http\Controllers;

use App\Models\DashbordNew;
use Illuminate\Http\Request;

class DashbordNewController extends Controller
{
    public function index()
    {
        $news = DashbordNew::all();
        return response()->json(["data" => $news], 200);
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
        if ($request->avatarupload == 1) {
            $file_name = time() . '_' . $request->photo->getClientOriginalName();
            $image = $request->file('photo')->storeAs('images', $file_name, 'public');
            DashbordNew::create([
                "title" => $request->title,
                "description" => $request->description,
                "photo" => '/storage/' . $image,

            ]);
        } else {
            DashbordNew::create([
                "title" => $request->title,
                "description" => $request->description,
                "photo" => Null,
            ]);
        }
        return response()->json(["message" => "news created successfull"], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = DashbordNew::find($id);
        return response()->json(["data" => $news], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashbordNew $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = DashbordNew::find($id);
        if ($request->avatarupload == 1) {
            $file_name = time() . '_' . $request->photo->getClientOriginalName();
            $image = $request->file('photo')->storeAs('images', $file_name, 'public');
            $news->update([
                "title" => $request->title,
                "description" => $request->description,
                "photo" => '/storage/' . $image,

            ]);
        } else {
            $news->update([
                "title" => $request->title,
                "description" => $request->description,
            ]);
        }
        return response()->json(["message" => "news updated successfull"], 201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = DashbordNew::find($id);
        $message = "";
        if ($news == null) {
            $message = "group with $id not found";
            return response()->json(["message" => $message], 404);
        } else {
            $news->delete();
            return response()->json(["message" => "news deleted"], 200);
        }
    }
}
