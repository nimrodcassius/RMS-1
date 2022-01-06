<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('HouseNo');
            $table->string('TenantName');
            $table->integer('PrevWaterBill');
            $table->integer('CurrWaterBill');
            $table->integer('TotalWaterCons');
            $table->bigInteger('Garbage');
            $table->bigInteger('TotalPayable');
            $table->string('PaymentCode');
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
        Schema::dropIfExists('payments');
    }
}
