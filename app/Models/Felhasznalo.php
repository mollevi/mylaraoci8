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
        'szuldatum',
        'jelszohash',
        'lakcim',
    ];

    protected $hidden = [
        'jelszohash',
        'remember_token',
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
        return $this->jelszohash;
    }

    public function getRememberTokenName()
    {
        return 'token';
    }

    public function getRememberToken()
    {
        return $this->token;
    }

    public function setRememberToken($value)
    {

    }


}
