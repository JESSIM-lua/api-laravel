<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // ✅ Vérifier si l'utilisateur est Chief
    public function isChief()
    {
        return $this->role === 'chief';
    }

    // ✅ Vérifier si l'utilisateur est Member
    public function isMember()
    {
        return $this->role === 'member';
    }
}
