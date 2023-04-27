<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arazas extends Model
{
    use HasFactory;

    protected $table = 'ARAZAS';

    protected $fillable = [
        'egysegar',
        'tipus',
    ];
}
