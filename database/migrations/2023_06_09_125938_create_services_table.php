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
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('companies_id');
            $table->string('service1');
            $table->string('service2');
            $table->string('service3');
            $table->string('service4');
            $table->string('service5');
            $table->string('service6');
            $table->string('service7');
            $table->string('service8');
            $table->string('service9');
            $table->string('service10');
            $table->timestamps();
            // $table->foreign('companies_id')
            // ->references('id')
            // ->on('companies')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};