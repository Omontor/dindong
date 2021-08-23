<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMunicipalitiesTable extends Migration
{
    public function up()
    {
        Schema::table('municipalities', function (Blueprint $table) {
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id', 'state_fk_4693886')->references('id')->on('states');
        });
    }
}
