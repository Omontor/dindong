<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rfc')->unique();
            $table->string('legal_name')->unique();
            $table->longText('address_1');
            $table->string('addres_2')->nullable();
            $table->string('postal_code');
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
