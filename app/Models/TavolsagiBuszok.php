<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TavolsagiBuszok extends Model
{
    use HasFactory;

    protected $table = 'TAVOLSAGI_BUSZOK';

    protected $fillable = [
        'leiras',
        'megnevezes',
        'indulasi_ido',
        'indulasi_telepules',
        'erkezesi_ido',
        'erkezesi_telepules'
    ];

    protected $hidden = [
        'remember_token'
    ];

}
