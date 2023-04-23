<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TavolsagiBuszok extends Model
{
    use HasFactory;

    protected $table = 'TAVOLSAGIBUSZ';

    protected $fillable = [
        'leiras',
        'megnevezes',
        'indulasi_ido',
        'indulasi_telepules'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function telepulesek(){
        return $this->hasMany(Megallo::class);
    }

}
