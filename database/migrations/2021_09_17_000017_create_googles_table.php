<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGooglesTable extends Migration
{
    public function up()
    {
        Schema::create('googles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('api')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
