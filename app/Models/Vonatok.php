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
        'megnevezes',
        'indulasi_ido',
        'indulasi_telepules',
    ];

    protected $hidden = [
        'remember_token'
    ];

}
