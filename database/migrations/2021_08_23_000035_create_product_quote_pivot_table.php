<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductQuotePivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_quote', function (Blueprint $table) {
            $table->unsignedBigInteger('quote_id');
            $table->foreign('quote_id', 'quote_id_fk_4705845')->references('id')->on('quotes')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_4705845')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
