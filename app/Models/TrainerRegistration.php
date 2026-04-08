<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainerRegistration extends Model
{
    protected $fillable = [
        'name',
        'email',
        'specialization'
    ];
}
