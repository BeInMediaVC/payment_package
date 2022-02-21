<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBnMyfatoorahSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bn_myfatoorah_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("supplier_name");
            $table->string("mobile");
            $table->string('email');
            $table->double('commission_value');
            $table->string('Commission_percentage');
            $table->string('deposit_terms');
            $table->string('bank_id');
            $table->string('bank_account_holder_name');
            $table->string('bank_account');
            $table->string('supplier_code');
            $table->string('iban');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bn_businesses');
    }
}
