<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('departure_location_id');
            $table->unsignedBigInteger('destination_location_id');
            $table->date('departure_date');
            $table->timestamps();

            $table->foreign('departure_location_id')->references('id')->on('locations');
            $table->foreign('destination_location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
