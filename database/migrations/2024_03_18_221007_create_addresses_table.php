<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createAddressesTable extends Migration
{
    public function up()
    {
        Schema::connection('mysql')->create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street', 255);
            $table->string('city', 255);
            $table->string('province', 255);
            $table->string('country', 255);
            $table->string('postal_code', 5);
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
