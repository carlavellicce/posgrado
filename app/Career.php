<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    public function interested(){
        return $this->hasMany(Interested::class); //carrera tiene muchos interesados
    }

    public function posts(){
        return $this->hasMany(Post::class); //carrera tiene muchos post
    }
}
