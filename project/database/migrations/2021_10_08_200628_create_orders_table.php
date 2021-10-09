<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('product_price');
            $table->integer('count')->length(4);
            $table->text('msg');
            $table->text('note');
            $table->enum('payment', ['vise', 'cash'])->default('vise');
            $table->string('vise')->nullable();
            $table->enum('delivery_method',['delivery', 'address'])->default('delivery');
            $table->string('address')->nullable();
            $table->enum('status',['wait', 'accept','refuse'])->default('wait');
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
