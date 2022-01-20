<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayments1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments1', function (Blueprint $table) {
          $table->id();
          $table->string('PaymentId');
          $table->string('Date');
          $table->string('TenantName');
          $table->bigInteger('Amount');
          $table->string('Status');        
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
        Schema::dropIfExists('payments1');
    }
}
