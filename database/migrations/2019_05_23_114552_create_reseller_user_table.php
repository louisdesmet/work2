<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_user', function (Blueprint $table) {
            $table->unsignedBigInteger('reseller_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('reseller_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary(['reseller_id', 'user_id']);
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
        Schema::dropIfExists('reseller_user');
    }
}
