<?php

namespace App\Models\Teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paimethod extends Model
{
    use HasFactory;

    //relationsheep Teacher
    public function teacher(){
        return $this->belongsTo(teacher::class);
    }

}
