<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded;


    public function isOwn(){

        return $this->user_id === auth()->id();

    }//end of is own condition


    public function conversation(){

        return $this->belongsTo(Conversation::class);
    }//end of con relation

    public function user(){

        return $this->belongsTo(User::class);
    }
}
