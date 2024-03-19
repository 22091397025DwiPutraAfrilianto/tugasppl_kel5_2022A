<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createContactsTable extends Migration
{
    public function up()
    {
        Schema::connection('mysql')->create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 120);
            $table->string('last_name', 120);
            $table->string('email', 120);
            $table->string('phone', 12);
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
