<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInvoicesTable extends Migration
{
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->unsignedBigInteger('user_data_id');
            $table->foreign('user_data_id', 'user_data_fk_4705782')->references('id')->on('user_infos');
            $table->unsignedBigInteger('name_id');
            $table->foreign('name_id', 'name_fk_4705781')->references('id')->on('clients');
            $table->unsignedBigInteger('paid_form_id');
            $table->foreign('paid_form_id', 'paid_form_fk_4705748')->references('id')->on('payment_forms');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id', 'payment_method_fk_4705749')->references('id')->on('payment_methods');
            $table->unsignedBigInteger('cfdi_use_id');
            $table->foreign('cfdi_use_id', 'cfdi_use_fk_4705750')->references('id')->on('tax_uses');
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id', 'currency_fk_4705753')->references('id')->on('currencies');
            $table->unsignedBigInteger('taxes_id');
            $table->foreign('taxes_id', 'taxes_fk_4705751')->references('id')->on('taxes');
            $table->unsignedBigInteger('type_voucher_id');
            $table->foreign('type_voucher_id', 'type_voucher_fk_4705752')->references('id')->on('related_vouchers');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_4705039')->references('id')->on('users');
        });
    }
}
