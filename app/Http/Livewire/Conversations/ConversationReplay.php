<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConversationReplay extends Component
{
    use WithFileUploads;

    public $body='';
    public $attachment ='';
    public $attachment_name ='';
    public $conversation;


    public function mount(Conversation $conversation){
        $this->conversation = $conversation;
    }


    public function render()
    {
        return view('livewire.conversations.conversation-replay');
    }

    public function replay(){
        dd($this->conversation );
    }//end of replay
}
