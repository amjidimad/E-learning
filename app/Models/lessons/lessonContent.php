<?php

namespace App\Models\lessons;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessonContent extends Model
{
    use HasFactory;
     //Realtionsheep
     public function lesson(){
        return $this->belongTo(lessons::class);
    }
}
