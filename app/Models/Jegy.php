<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jegy extends Model
{
    use HasFactory;

    protected $table = 'JEGY';

    public $timestamps = false;

    protected $fillable = [
        'ar',
        'tipus',
        'tavolsag',
        'felhasznalo_id'
    ];

    protected $hidden = [
        'remember_token'
    ];

}
