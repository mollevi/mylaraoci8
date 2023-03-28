<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TavolsagiBuszok extends Model
{
    use HasFactory;

    protected $table = 'TAVOLSAGI_BUSZOK';

    protected $fillable = [
        'allomas',
        'megnevezes'
    ];

    protected $hidden = [
        'remember_token'
    ];

}
