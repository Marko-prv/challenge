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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
        });

        Schema::create('unittypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('size');
            $table->string('short_description')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_archived');
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) { 
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('unittype_id');
            $table->unsignedBigInteger('language_id');
            $table->foreign('unittype_id')->references('id')->on('unittypes');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->timestamps();
        });  

        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->integer('floor')->nullable();
            $table->float('area')->nullable();
            $table->float('width')->nullable();
            $table->float('depth')->nullable();
            $table->float('volume')->nullable();
            $table->float('ceiling_height')->nullable();
            $table->float('door_height')->nullable();
            $table->float('door_width')->nullable();
            $table->float('door_type')->nullable();
            $table->unsignedBigInteger('unit_type_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('language_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('unit_type_id')->references('id')->on('unittypes');
            $table->foreign('language_id')->references('id')->on('languages');
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
        Schema::dropIfExists('languages');
        Schema::dropIfExists('unittypes');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('units');
    }
};
