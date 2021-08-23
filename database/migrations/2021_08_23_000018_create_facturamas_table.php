<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturamasTable extends Migration
{
    public function up()
    {
        Schema::create('facturamas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('api')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
