<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExclusiveOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exclusive_options', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string("Exclusive_option");
            $table->bigInteger("Exclusive_id")->unsigned();
            $table->boolean("Active_flag")->default(1);
            $table->decimal("Price")->default(0);
            $table->timestamp("Created_at")->useCurrent();

            $table->foreign("Exclusive_id")->references("Id")
                ->on("tour_exclusives")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exclusive_options');
    }
}
