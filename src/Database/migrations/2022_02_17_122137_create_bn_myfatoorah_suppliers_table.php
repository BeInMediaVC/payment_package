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
            $table->double('commission_value')->nullable();
            $table->string('Commission_percentage')->nullable();
            $table->string('deposit_terms')->nullable();
            $table->string('bank_id')->nullable();
            $table->string('bank_account_holder_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('supplier_code')->nullable();
            $table->string('iban')->nullable();
            $table->boolean('is_active')->default(false);
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
