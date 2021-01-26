<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cpf','email', 'password','image', 'celular', 'data_nascimento'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

        public function sendPasswordResetNotification($token)
    {
        // Não esquece: use App\Notifications\ResetPassword;
        $this->notify(new ResetPassword($token));
    }
}
