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
        Schema::create('pengalaman_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('info_user_id');
            $table->foreign('info_user_id')->references('id')->on('info_users')->onDelete('cascade');
            $table->string('posisi')->nullable();
            $table->string('perusahaan')->nullable();
            $table->date('waktu')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalaman_users');
    }
};
