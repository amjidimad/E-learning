<?php

namespace App\Models\lessons;

use App\Models\Teachers\teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\lessons\lessons;
use App\Models\students\student;

class homework extends Model
{
    use HasFactory;

    //Relationsheep
    public function lesson(){
        return $this->belongTo(lessons::class);
    }
    public function student(){
        return $this->belongTo(student::class);
    }
    public function teacher(){
        return $this->belongTo(teacher::class);
    }
}
