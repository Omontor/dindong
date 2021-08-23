<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQuotesTable extends Migration
{
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id', 'client_fk_4705011')->references('id')->on('clients');
            $table->unsignedBigInteger('tax_id');
            $table->foreign('tax_id', 'tax_fk_4705848')->references('id')->on('taxes');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_4705015')->references('id')->on('users');
        });
    }
}
