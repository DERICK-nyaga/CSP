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
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('user_id');
            $table->integer('parcel_id');
            $table->unsignedInteger('companies_id');
            $table->string('sender');
            $table->string('SenderContact');
            $table->string('receipient');
            $table->string('ReceipientContact');
            $table->string('town');
            $table->string('weight');
            $table->string('PickupStation');
            $table->string('DeliveryAddress');
            $table->string('payment');
            $table->float('price');
            $table->foreign('branches_id')
            ->references('companies_id')
            ->on('branches')
            ->onDelete('cascade');
            $table->timestamps();
        });

        // relating to the company's table inventory where all company's parcels are stored

        // Schema::create('inventory', function (Blueprint $table){
        //     $table->increments('id');
        //     $table->unsignedInteger('parcel_id');
        //     $table->unsignedInteger('comapany_id');
        //     $table->timestamps();
        //     $table->foreignId('parcel_id')
        //     ->references('id')
        //     ->on('parcels')
        //     ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};