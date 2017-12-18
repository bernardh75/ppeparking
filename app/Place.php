<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Place extends Model
{

    protected $fillable = [
        'nomplace', 'idutilisateurplace'
    ];

    public function user() 
    {
        return $this->belongsTo(\App\User::class);
    }
}
