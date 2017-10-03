<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('model');
            $table->string('serial_chasis');
            $table->string('purchase_date');
            $table->string('cost');
            $table->string('condition');
            $table->string('device_image');
            $table->string('category');
            $table->string('receipt_no');
            $table->string('receipt_image');
            $table->string('device_mark');
            $table->string('imei');
            $table->string('plate_no');
            $table->string('transmission');
            $table->string('status');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->rememberToken();
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
        //
    }
}
