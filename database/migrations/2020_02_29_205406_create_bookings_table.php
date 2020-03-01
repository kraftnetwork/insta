<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->bigInteger("User_id")->unsigned();
            $table->timestamp("Booking_date");
            $table->tinyInteger("Booking_status");
            $table->bigInteger("Package_id")->unsigned();
            $table->text("Notes")->nullable();
            $table->timestamp("Created_at")->useCurrent();

            $table->foreign("User_id")->references("User_id")
                ->on("users")->onDelete("cascade");
            $table->foreign("Package_id")->references("Package_id")
                ->on("tour_packages")->onDelete("cascade");
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
