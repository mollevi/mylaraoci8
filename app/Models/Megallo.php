<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Megallo extends Model
{
    use HasFactory;

    protected $table = 'MEGALLO';

    public $timestamps = false;
    protected $fillable = [
        'telepules',
        'nev',
        'kilometer',
        'idopont',
        'jarat_id',
        'sorszam'
    ];

}
