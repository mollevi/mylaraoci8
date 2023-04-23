<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vonatok extends Model
{
    use HasFactory;

    protected $table = 'VONAT';

    protected $fillable = [
        'leiras',
        'magnevezes',
        'infulasideje',
        'indulashelye',
    ];

    protected $hidden = [
        'remember_token'
    ];

}
