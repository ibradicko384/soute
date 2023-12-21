<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
{
    $conversations = Conversation::all();
    return view('messages.index', compact('conversations'));
}

public function show(Conversation $conversation)
{
    $messages = $conversation->messages;
    return view('messages.show', compact('conversation', 'messages'));
}

}
