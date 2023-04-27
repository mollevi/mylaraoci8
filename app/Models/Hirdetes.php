<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hirdetes extends Model
{
    use HasFactory;

    protected $table = 'HIRDETES';

    protected $fillable = [
        'cim',
        'tartalom',
    ];

    protected $hidden = [
        'remember_token'
    ];
}
