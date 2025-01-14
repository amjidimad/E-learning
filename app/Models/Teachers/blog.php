<?php

namespace App\Models\teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

     //Relationsheep Blog
     public function teacher(){
        return $this->belongsTo(teacher::class);
    }
}
