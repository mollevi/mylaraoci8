<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TavolsagiBusz extends Model
{
    use HasFactory;

    protected $table = 'TAVOLSAGIBUSZ';

    public $timestamps = false;

    protected $fillable = [
        'leiras',
        'megnevezes',
        'indulasi_ido',
        'indulasi_telepules'
    ];

    protected $hidden = [
        'remember_token'
    ];



    public function megallok(){
        return $this->hasMany(Megallo::class, "tavolsagibusz_id", "id")
            ->orderBy("sorszam", "asc")->get();
    }
}
