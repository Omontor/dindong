<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassiveMailsTable extends Migration
{
    public function up()
    {
        Schema::create('massive_mails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('content');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
