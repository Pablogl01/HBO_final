<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable=["content","user_id","video_id"];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function video(){
        return $this->belongsToMany(Video::class,'video_id');
    }
}
