<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->string('last_name');
        $table->string('age_range');
        $table->string('nationality');
        $table->string('state');
        $table->string('gender');
        $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->string('last_name');
        $table->string('age_range');
        $table->string('nationality');
        $table->string('state');
        $table->string('gender');
        $table->string('address');
        });
    }
}
