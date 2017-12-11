<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AddAdminSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->insert(
           
           array(
                'name' => 'ltyauy',
                'email' => 'gforceizimoney@gmail.com',
                'password' => '132259',
		'Droitsadmin' => TRUE,		
                )

        );
    }
 
}

?>
