<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function places() 
    {
        return $this->hasMany(App\Place::class);
    }

    public function attentes() 
    {
        return $this->belongsTo(\App\Attente::class);
    }


    public function getAll()
    {
        return static::all();
    }


    public function findUser($id)
    {
        return static::find($id);
    }


    public function deleteUser($id)
    {
        return static::find($id)->delete();
    }
}
