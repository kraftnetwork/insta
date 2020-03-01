<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_events', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string("Title");
            $table->bigInteger("Package_id")->unsigned();
            $table->string("Description");
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
        Schema::dropIfExists('tour_events');
    }
}
