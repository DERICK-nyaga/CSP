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
            $table->unsignedInteger('branch_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('parcel_id')->unique()->nullable();
            $table->unsignedInteger('companies_id')->nullable();
            $table->string('sender')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('receipient')->nullable();
            $table->string('ReceipientContact')->nullable();
            $table->string('town')->nullable();
            $table->string('weight')->nullable();
            $table->string('PickupStation')->nullable();
            $table->string('DeliveryAddress')->nullable();
            $table->string('payment')->nullable();
            $table->float('amount')->nullable();
            // $table->foreign('branches_id')
            // ->references('companies_id')
            // ->on('branches')
            // ->onDelete('cascade');
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
