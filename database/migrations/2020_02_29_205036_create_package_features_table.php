<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_features', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string("Feature_name",150);
            $table->string("Package_icon",50);
            $table->bigInteger("Package_id")->unsigned();
            $table->boolean("Active_flag")->default(1);
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
        Schema::dropIfExists('package_features');
    }
}
