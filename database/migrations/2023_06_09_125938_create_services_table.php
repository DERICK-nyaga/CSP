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
            $table->unsignedInteger('companies_id')->nullable();
            $table->string('service1')->nullable();
            $table->string('service2')->nullable();
            $table->string('service3')->nullable();
            $table->string('service4')->nullable();
            $table->string('service5')->nullable();
            $table->string('service6')->nullable();
            $table->string('service7')->nullable();
            $table->string('service8')->nullable();
            $table->string('service9')->nullable();
            $table->string('service10')->nullable();
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
