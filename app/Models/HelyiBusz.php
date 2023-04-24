<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelyiBusz extends Model
{
    use HasFactory;

    protected $table = 'HELYIBUSZ';

    protected $fillable = [
        'leiras',
        'megnevezes',
        'indulasi_ido',
        'telepules'
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function megallok(){
        return $this->hasMany(Megallo::class, "helyibusz_id", "id")->get();
    }
}
