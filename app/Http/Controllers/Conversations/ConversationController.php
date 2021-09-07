<?php

namespace App\Http\Controllers\Conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request){


        $conversations = $request->user()->conversations;

        return view('conversations.index',compact('conversations'));
    }//end of index

    public function show(Conversation $conversation ,Request $request){

        $conversations = $request->user()->conversations;

        return view('conversations.show',compact('conversations','conversation'));

    }//end of show
}//end of conversation
