<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultations extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'day',
        'time',
        'doctors_id',
    ];



    public function user()
    {

        return $this->belongsTo(User::class);
    }
    public function doctor()
    {

        return $this->belongsTo(Doctor::class);
    }
}
