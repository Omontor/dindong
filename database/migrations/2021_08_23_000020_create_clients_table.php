<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rfc')->unique();
            $table->string('legal_name');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('zip_code');
            $table->string('email');
            $table->string('name');
            $table->string('last_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
