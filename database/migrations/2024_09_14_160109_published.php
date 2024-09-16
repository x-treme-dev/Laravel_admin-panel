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
         // таблица опубликованных комментариев
         Schema::create('published', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('message');
            $table->integer('rating');
            $table->timestamps();
        });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //  
        Schema::dropIfExists('published');
    }
};
