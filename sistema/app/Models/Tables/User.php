<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = 
    [
        'name',
        'email',
        'password',        
        'cpf',        
        'celular',        
    ];

    public $rules = [                
        'email'    => 'required|unique:users',
        'name' => 'required',
        'password'      => 'required',               
    ];
}
