<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attente extends Model
{
    protected $fillable = ['idutilisateurattente'];

    public function user() 
    {
        return $this->hasMany('App\User','rangplaceattenteutil');
    }
    
}
