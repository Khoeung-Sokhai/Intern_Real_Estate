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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');           
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->string('size');
            $table->float('price_sale', 8, 2)->nullable();
            $table->float('price_rent', 8, 2)->nullable();
            $table->float('price_rental', 8, 2)->nullable();
            $table->string('cover');
            $table->string('description');
            $table->string('amenity');
            $table->json('types');
            $table->unsignedBigInteger('agent_id')->nullable();
           
            $table->foreign('agent_id')->references('id')->on('users');

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
        Schema::dropIfExists('properties');
    }
};