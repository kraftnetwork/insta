<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->bigIncrements('Package_id');
            $table->string("Package_name");
            $table->decimal("Price");
            $table->string("Package_image")->nullable();
            $table->text("Description")->nullable();
            $table->bigInteger("Tour_id")->unsigned();
            $table->boolean("Active_flag")->default(1);
            $table->timestamp("Created_at")->useCurrent();

            $table->foreign("Tour_id")->references("Id")
                ->on("group_tours")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_packages');
    }
}
