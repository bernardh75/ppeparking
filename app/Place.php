<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
	protected $table = 'places';

	protected $primaryKey = 'idplace';

	public $timestamps = false;


    protected $fillable = [
        'nomplace'
    ];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
