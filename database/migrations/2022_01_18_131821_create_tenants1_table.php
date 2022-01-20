<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenants1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants1', function (Blueprint $table) {
          $table->id();
          $table->string('HouseNo');
          $table->string('TenantName');
          $table->bigInteger('MonthlyRate');
          $table->bigInteger('OutstandingBalance');
          $table->string('LastPayment');
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
        Schema::dropIfExists('tenants1');
    }
}
