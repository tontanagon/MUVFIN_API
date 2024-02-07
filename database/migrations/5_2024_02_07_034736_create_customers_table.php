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
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->string('phone', 20);
            $table->boolean('status')->default(true);
            $table->timestamps();


            $table->foreign('customer_id')
            ->references('customer_id')
            ->on('users')
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
        Schema::dropIfExists('customers');
    }
};
