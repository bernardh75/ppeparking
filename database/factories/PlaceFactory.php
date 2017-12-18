<?php

use Faker\Generator as Faker;

$factory->define(App\Place::class, function (Faker $faker) {
    return [
    	'nomplace'=> $faker->unique()->word(),
        //
    ];
});
