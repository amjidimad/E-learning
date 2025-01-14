<?php

namespace App\Models\Teachers;

use App\Models\Teacher\paimethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    //Relationsheep Expriences
    public function experiences(){
        return $this->hasMany(experience::class);
    }

    //Relationsheep Educations
     public function educations(){
        return $this->hasMany(education::class);
    }
    
    //Relationsheep Certificats
     public function certificats(){
        return $this->hasMany(certificat::class);
    }

    //Relationsheep Blogs
     public function blogs(){
        return $this->hasMany(blog::class);
    }

    //Relationsheep Librarys
      public function librarys(){
        return $this->hasMany(library::class);
    }

    //Relationsheep Paimethods
    public function paimethods(){
        return $this->hasMany(paimethod::class);
    }
    

}
