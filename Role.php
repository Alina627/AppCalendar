<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Access\Authorizable;
// use Laravel\Lumen\Auth\Authorizable;

class Role extends Model
{
    use HasFactory;



    public function user()
    {
        // un rol de user poate fi atribuit mai multor useri
        return $this->belongsToMany(User::class);
    }
}
