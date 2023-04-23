<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TavolsagiBuszok extends Model
{
    use HasFactory;

    protected $table = 'TAVOLSAGIBUSZ';

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
