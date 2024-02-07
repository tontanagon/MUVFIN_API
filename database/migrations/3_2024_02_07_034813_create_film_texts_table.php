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
        Schema::create('film_texts', function (Blueprint $table) {
            $table->unsignedBigInteger('film_id');
            $table-> mediumText('description');
            $table->timestamps();


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
        Schema::dropIfExists('film_texts');
    }
};
