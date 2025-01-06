<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    //
    protected $fillable = ['username' , 'email' , 'password' , 'fullname'];

    public function shares()
    {
        return $this->belongsToMany(Share::class, 'users_shares');
    }

}

