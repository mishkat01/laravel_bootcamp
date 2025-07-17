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
        Schema::create('input_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->enum('type', ['Physical', 'Digital']);
            $table->boolean('is_active')->default(true);
            $table->string('image_path')->nullable();
            $table->date('available_on')->nullable();
            $table->time('available_at')->nullable();
            $table->dateTime('available_datetime')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('color')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_categories');
    }
};
