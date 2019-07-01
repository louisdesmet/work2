<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('product_key_id')->nullable();
            $table->foreign('product_key_id')->references('id')->on('product_keys');
            $table->enum('status', ['active', 'pending', 'suspended', 'terminated', 'cancelled', 'fraud']);
            $table->timestamp('date');
            $table->string('billing')->nullable();
            $table->string('domain')->nullable();
            $table->string('tenant')->nullable();
            $table->string('reference')->nullable();
            $table->string('email')->nullable();
            $table->string('amount')->nullable();
            $table->string('duration')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
