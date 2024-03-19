<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createUsersTable extends Migration
{
    public function up()
    {
        Schema::connection('mysql')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 120)->unique();
            $table->string('password', 12);
            $table->string('name', 120);
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
