<?php

use Faker\Generator as Faker;

$factory->define(App\places::class, function (Faker $faker) {
    return [
    	'nomplace'=> $faker->unique()->word(),
        //
    ];
});
