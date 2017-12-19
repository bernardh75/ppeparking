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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('idplaceutil')->nullable()->unsigned();
    	    $table->integer('rangplaceattenteutil')->nullable()->unsigned();
    	    $table->foreign('idplaceutil')->references('id')->on('places');
            $table->foreign('rangplaceattenteutil')->references('id')->on('attentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
