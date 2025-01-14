<?php

namespace App\Models\teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;

    //relationsheep Teacher
    public function teacher(){
        return $this->belongsTo(teacher::class);
    }
}
