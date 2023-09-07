<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = ['content', 'user_id', 'likes'];

    public function user(){
        return $this->belongsTo(User::class); 
    }
    use HasFactory;
}
