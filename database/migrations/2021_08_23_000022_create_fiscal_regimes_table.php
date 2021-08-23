<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiscalRegimesTable extends Migration
{
    public function up()
    {
        Schema::create('fiscal_regimes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
