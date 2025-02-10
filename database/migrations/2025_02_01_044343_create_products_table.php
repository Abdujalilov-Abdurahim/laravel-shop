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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("team_id"); // Foreign key uchun unsignedBigInteger
            $table->string("name");
            $table->string("short_description");
            $table->decimal("price", 10, 2);
            $table->string("image")->nullable();  // Agar rasm bo‘lmasa null bo‘lishi mumkin
            $table->foreign("team_id")->references("id")->on("teams")->onDelete("cascade");  // Bog‘langan jamoa o‘chsa, mahsulot ham o‘chadi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
