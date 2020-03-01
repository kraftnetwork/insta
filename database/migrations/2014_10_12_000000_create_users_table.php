<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('User_id');
            $table->string('Name');
            $table->string('Email')->unique();
            $table->bigInteger('Country_id')->unsigned();
            $table->timestamp('Email_verified_at')->nullable();
            $table->string('Password');
            $table->boolean("Active_flag")->default(1);
            $table->timestamp("Registered_on")->useCurrent();

            $table->foreign("Country_id")->references("Id")
                ->on("countries")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
