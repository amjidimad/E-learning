<?php

namespace App\Models\Teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;


    //Relationsheep Teacher
    public function teacher(){
        return $this->belongsTo(teacher::class);
    }
}
