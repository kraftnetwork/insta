<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('booking_addresses', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string("Address");
            $table->bigInteger("Booking_id")->unsigned();
            $table->bigInteger("Country_id")->unsigned();
            $table->timestamp("Created_at")->useCurrent();

            $table->foreign("Country_id")->references("Id")
                ->on("countries")->onUpdate("cascade");
            $table->foreign("Booking_id")->references("Id")
                ->on("bookings")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_addresses');
    }
}
