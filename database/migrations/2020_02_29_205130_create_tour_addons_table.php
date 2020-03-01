<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tour_addons', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string("Addon_name",150);
            $table->decimal("Price");
            $table->boolean("Active_flag")->default(1);
            $table->bigInteger("Package_id")->unsigned();
            $table->timestamp("Created_at")->useCurrent();
            $table->foreign("Package_id")->references("Package_id")
                ->on("tour_packages")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_addons');
    }
}
