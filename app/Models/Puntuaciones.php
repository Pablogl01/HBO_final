<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuaciones extends Model
{
    protected $fillable=["video_id","user_id","p_num"];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
