<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jarat extends Model
{
    use HasFactory;

    protected $table = 'JARAT';

    public $timestamps = false;

    protected $fillable = [
        'tipus',
        'megnevezes',
        'leiras',
        'datum'
    ];

    public function megallok()
    {
        return $this->hasMany("App\Models\Megallo", "jarat_id","id");
    }
}
