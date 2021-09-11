<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConversationReplay extends Component
{
    use WithFileUploads;

    public $body='';
    public $attachment ;
    public $attachment_name;
    public $conversation;


    public function mount(Conversation $conversation){
        $this->conversation = $conversation;
    }

    protected $rules = [
        'body' => 'required',
        'attachment' => ['nullable', 'file','mimes' =>['png','jpg','mp4','gif','wiv','mp3'],'max'=>'102400'],
    ];


    public function render()
    {
        return view('livewire.conversations.conversation-replay');
    }

    public function replay(){
        $this->validate();


        if ($this->attachment != '') {
            $this->attachment_name = md5($this->attachment . microtime()) .'.'.$this->attachment->extension();

            $this->attachment->storeAs('/',$this->attachment_name,'media');
            $data['attachment'] = $this->attachment_name;
        }//end of saving attachment

        $data['body'] = $this->body;

        $data['user_id'] = auth()->id();


        $message = $this->conversation->messages()->create($data);

        $this->conversation->update(['last_message_at'=>now()]);


        foreach ($this->conversation->others as $user){
                $user->conversations()->UpdateExistingPivot($this->conversation,[
                    'read_at' => null
                ]);
        }

        $this->body = null;
        $this->attachment_name = null;
        $this->attachment = null;


    }//end of replay
}
