<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            $table->integer('n_days')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'declined'])->default('pending');
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method', ['cash_on_delivery', 'bkash'])->default('cash_on_delivery');

            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('notes')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('prescription_orders');
    }
}
