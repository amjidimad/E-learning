<?php

namespace App\Models\lessons;

use App\Models\students\student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attestation extends Model
{
    use HasFactory;

    //Realtionsheep
    public function lesson(){
        return $this->belongTo(lessons::class);
    }
    public function student(){
        return $this->belongTo(student::class);
    }
}
