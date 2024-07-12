<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory;

    function getAuthIdentifierName() {
        return 'id';
    }
    function getAuthIdentifier() {
        return $this->id;
    }
    function getAuthPassword() {
        return $this->password;
    }
    function getRememberToken() {
        
    }
    function setRememberToken($value) {

    }
    function getRememberTokenName() {

    }

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'admin',
    ];
}