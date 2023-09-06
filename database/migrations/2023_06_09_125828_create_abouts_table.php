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
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id')->nullable();
            $table->string('branch')->nullable();
            $table->biginteger('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('avenue')->nullable();
            $table->string('street')->nullable();
            $table->string('building')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('roomnumber')->nullable();
            $table->string('weekdaysopening')->nullable();
            $table->string('weekendsopening')->nullable();
            $table->string('weekdaysclosing')->nullable();
            $table->string('weekendsclosing')->nullable();
            $table->timestamps();
            // $table->foreign('company_id')
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
        Schema::dropIfExists('abouts');
    }
};