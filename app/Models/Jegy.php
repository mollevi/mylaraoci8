<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jegy extends Model
{
    use HasFactory;

    protected $table = 'JEGY';

    protected $fillable = [
        'ar',
        'tipus',
        'felhasznalo_id'
    ];

    protected $hidden = [
        'remember_token'
    ];

}
