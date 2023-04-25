<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modositas extends Model
{
    use HasFactory;

    protected $table = 'MODOSITAS';

    public $timestamps = false;

    protected $fillable = [
        'admin_id',
        'szoveg',
        'datum'
    ];

    protected $hidden = [
        'remember_token',
    ];

}
