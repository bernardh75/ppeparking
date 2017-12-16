<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    protected $fillable = [
        'id','nomplace'
    ];

    public function user() 
    {
        return $this->belongsTo(\App\User::class);
    }
}
