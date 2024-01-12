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
        Schema::create('dvd', function (Blueprint $table) {
            $table->id();
            $table->string('dvd_code', 100)->unique();
            $table->string('img_url');
            $table->decimal('harga', 10, 3);
            $table->string('title', 100);
            $table->string('rilis');
            $table->string('durasi');
            $table->string('produser', 100);
            $table->text('deskripsi');
            $table->string('status')->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dvd');
    }
};
