<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkUtilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilisateur', function (Blueprint $table) {
            $table->integer('idplaceutil')->unsigned();
	    $table->integer('rangplaceattenteutil')->unsigned();
	    $table->foreign('idplaceutil')->references('idplace')->on('place');
            $table->foreign('rangplaceattenteutil')->references('rangplaceattente')->on('attente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilisateur', function (Blueprint $table) {
            //
        });
    }
}
