<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUserInfosTable extends Migration
{
    public function up()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id', 'state_fk_4693914')->references('id')->on('states');
            $table->unsignedBigInteger('municipality_id');
            $table->foreign('municipality_id', 'municipality_fk_4693915')->references('id')->on('municipalities');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id', 'country_fk_4693925')->references('id')->on('countries');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_4705017')->references('id')->on('users');
        });
    }
}
