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
    Schema::create('course_group', function (Blueprint $table) {
        $table->id();
        
        // Relación explícita a la tabla 'groups'
        $table->foreignId('group_id')
              ->constrained('groups')
              ->cascadeOnDelete();
              
        // Relación explícita a la tabla 'courses'
        $table->foreignId('course_id')
              ->constrained('courses')
              ->cascadeOnDelete();
              
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_group');
    }
};
