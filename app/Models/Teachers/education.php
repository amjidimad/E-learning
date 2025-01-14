<?php

namespace App\Models\Teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    use HasFactory;

     //Relationsheep Teacher
     public function teacher(){
        return $this->belongsTo(teacher::class);
    }
}
