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
        // id => PK UNSIGNED BIGINT AUTO_INCREMENT
        // title => VARCHAR(100)
        // price => INSIGNED INT (en centavos)
        // release_date => DATE NULL
        // synopsis => TEXT NULL

        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->string('title', 100);
            $table->unsignedInteger('price');
            $table->date('release_date')->nullable();
            $table->text('synopsis')->nullable();
            $table->string('cover')->nullable();
            $table->string('cover_description')->nullable();
            // created_at, updated_at => con Eloquent se crean automáticamente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
