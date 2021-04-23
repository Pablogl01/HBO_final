<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuaciones extends Model
{
    protected $fillable=["videos_id","user_id","p_num"];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function video(){
        return $this->belongsTo(Video::class,'video_id');
    }

}
