<?php

namespace App\Models\lessons;

use App\Models\Teachers\teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    use HasFactory;

    //Relationsheep teacher
    public function teacher(){
        return $this->belongsTo(teacher::class);
    }

    //Relationsheep categorie
    public function category(){
        return $this->belongsTo(category::class);
    } 

}
