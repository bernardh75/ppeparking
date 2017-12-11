<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->increments('idutilisateur');
            $table->timestamps();

	    $table->string('nomutilisateur',30);
	    $table->boolean('Droitsadmin');
	    $table->string('nom',30);
	    $table->string('prenom',30);
	    $table->string('email');
	    $table->string('nomrue',50);
	    $table->integer('numrue');
	    $table->bigInteger('CP');
            $table->string('ville',30);
	    $table->date('debutreserv');
	    $table->date('finreserv');
	    		    
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
