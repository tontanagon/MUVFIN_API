<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string('payment_id',6)->primaryKey();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('film_id');
            $table->float('total', 8, 2);
            $table->unsignedBiginteger('week');
            $table->timestamps();

            $table->foreign('customer_id')
            ->references('customer_id')
            ->on('customers')
            ->onDelete('cascade');

            $table->foreign('film_id')
            ->references('film_id')
            ->on('films')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
