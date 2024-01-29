<?php

namespace App\Http\Controllers;

use App\Models\ChatMessages;
use App\Http\Requests\StoreChatMessagesRequest;
use App\Http\Requests\UpdateChatMessagesRequest;

class ChatMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreChatMessagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChatMessages $chatMessages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChatMessages $chatMessages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChatMessagesRequest $request, ChatMessages $chatMessages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChatMessages $chatMessages)
    {
        //
    }
}
