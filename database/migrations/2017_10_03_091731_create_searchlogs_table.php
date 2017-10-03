<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searchlogs', function (Blueprint $table) {
            $table->increments('id');
            $table->ipAddress('visitor');
            $table->macAddress('device');
            $table->string('category');
            $table->string('name');
            $table->string('status');
            $table->string('device_iemi_serial_vin_chasis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('searchlogs');
    }
}
