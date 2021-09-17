<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToClientsTable extends Migration
{
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id', 'country_fk_4704866')->references('id')->on('countries');
            $table->unsignedBigInteger('municipality_id');
            $table->foreign('municipality_id', 'municipality_fk_4705004')->references('id')->on('municipalities');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id', 'state_fk_4705005')->references('id')->on('states');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_4705016')->references('id')->on('users');
        });
    }
}
