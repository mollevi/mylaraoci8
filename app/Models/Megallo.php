<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Megallo extends Model
{
    use HasFactory;

    protected $table = 'MEGALLO';

    protected $fillable = [
        'nev',
        'kilometer',
        'vonat_id',
        'helyi_busz_id',
        'tavolsagi_busz_id'
    ];

    protected $hidden = [
        'remember_token',
    ];

}
