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
        Schema::create('parcels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender');
            $table->string('SenderContact');
            $table->string('receipient');
            $table->string('ReceipientContact');
            $table->string('town');
            $table->string('weight');
            $table->string('PickupStation');
            $table->string('DeliveryAddress');
            $table->string('info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};