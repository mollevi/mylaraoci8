<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Felhasznalo extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'FELHASZNALO';

    protected $fillable = [
        'nev',
        'email',
        'szul_datum',
        'jelszo',
        'iranyitoszam',
        'cim',
        'hazszam'
    ];

    protected $hidden = [
        'jelszo',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->jelszo;
    }

    public function getRememberTokenName()
    {
        return 'token';
    }
    public function getRememberToken(){
        return $this->token;
    }

    public function setRememberToken($value){

    }


}
