<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vonat extends Model
{
    use HasFactory;

    protected $table = 'VONAT';

    protected $fillable = [
        'leiras',
        'megnevezes',
        'indulasi_ido',
        'indulasi_telepules',
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function megallok(){
        return $this->hasMany(Megallo::class, "vonat_id", "id")
            ->orderBy("sorszam", "asc")->get();
    }

}
