<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRéserver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('réservations', function (Blueprint $table) {
            $table->date('finperiode');
            $table->date('debutperiode')->foreign('debutperiode')->references('debutreserv')->on('users');
            $table->integer('id')->unsigned()->foreign('idmembres')->references('id')->on('users');
            $table->integer('idplace')->unsigned()->foreign('idplaces')->references('id')->on('places');
            $table->primary(array('id','idplace','debutperiode'));
            $table->boolean('valider')->default(0);
        })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('réservations');
    }
}
