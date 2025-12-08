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
        Schema::create('info_users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('image')->default('default.jpg');
            $table->integer('lulusan')->nullable();
            $table->string('jurusan')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('about')->default('Pengguna belum menambahkan deskripsi tentang dirinya.');
            $table->string('email')->nullable();
            $table->string('phone')->default('-');
            $table->string('addres')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_users');
    }
};
