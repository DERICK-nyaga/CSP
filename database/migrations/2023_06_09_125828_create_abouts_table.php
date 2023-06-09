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
            $table->unsignedInteger('branch_id');
            $table->string('branch');
            $table->biginteger('mobile');
            $table->string('email');
            $table->string('avenue');
            $table->string('street');
            $table->string('building');
            $table->integer('floor');
            $table->integer('room');
            $table->timestamps();
            $table->foreign('branch_id')
            ->references('id')
            ->on('branches')
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