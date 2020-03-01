<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_addons', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->bigInteger("Booking_id")->unsigned();
            $table->bigInteger("Addon_id")->unsigned();
            $table->timestamp("Created_at")->useCurrent();

            $table->foreign("Booking_id")->references("Id")
                ->on("bookings")->onUpdate("cascade");
            $table->foreign("Addon_id")->references("Id")
                ->on("tour_addons")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_addons');
    }
}
