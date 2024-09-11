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
        Schema::create('flight_buyer', function (Blueprint $table) {
            $table->unsignedBigInteger('flight_id');
            $table->unsignedBigInteger('buyer_id');

            $table->foreign('flight_id')
                ->references('id')
                ->on('flights')
                ->onDelete('cascade');

            $table->foreign('buyer_id')
                ->references('id')
                ->on('buyers')
                ->onDelete('cascade');

            $table->primary(['flight_id', 'buyer_id'], 'flight_buyer_primary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_buyer');
    }
};
