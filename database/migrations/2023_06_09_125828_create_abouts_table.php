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
            $table->unsignedInteger('company_id');
            $table->string('branch');
            $table->biginteger('mobile');
            $table->string('email');
            $table->string('avenue');
            $table->string('street');
            $table->string('building');
            $table->integer('floor');
            $table->integer('roomnumber');
            $table->string('weekdaysopening');
            $table->string('weekendsopening');
            $table->string('weekdaysclosing');
            $table->string('weekendsclosing');
            $table->timestamps();
            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
            ->onDelete('cascade');
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