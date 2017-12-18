<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Place::class, 20)->create();
         
    }
}
