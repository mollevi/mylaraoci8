<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelyiBuszok extends Model
{
    use HasFactory;
    protected $fillable = [
        'allomas',
        'magnevezes',
    ];

    protected $hidden = [
        'remember_token',
    ];

}
