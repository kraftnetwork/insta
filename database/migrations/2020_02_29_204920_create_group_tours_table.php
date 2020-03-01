<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_tours', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string("Tour_name");
            $table->text("Description")->nullable();
            $table->text("Terms_and_condition")->nullable();
            $table->string("Tour_slug")->unique();
            $table->dateTime("Booking_closes_on")->nullable();
            $table->boolean("Active_flag")->default(1);
            $table->timestamp("Created_at")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_tours');
    }
}
