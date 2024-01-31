<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMessages extends Model
{
    use HasFactory;
    //protected $fillable = ['message', 'chat_id','user_id','type','data'];
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
