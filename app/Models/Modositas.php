<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modositas extends Model
{
    use HasFactory;

    protected $fillable = [
        'jegy_id',
        'admin_id',
        'szoveg',
        'datum'
    ];

    protected $hidden = [
        'remember_token',
    ];

}
