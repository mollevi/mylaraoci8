<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelyiBuszok extends Model
{
    use HasFactory;

    protected $table = 'HELYI_BUSZOK';

    protected $fillable = [
        'leiras',
        'magnevezes',
        'indulasi_ido',
        'erkezesi_ido',
        'telepules'
    ];

    protected $hidden = [
        'remember_token',
    ];

}
