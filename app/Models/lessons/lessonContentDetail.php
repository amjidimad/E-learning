<?php

namespace App\Models\lessons;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessonContentDetail extends Model
{
    use HasFactory;
    //Realtionsheep
    public function lessonContent(){
        return $this->belongTo(lessonContent::class);
    }
}
