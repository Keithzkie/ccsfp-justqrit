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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Pangalan ng Estudyante
            $table->string('student_id')->unique(); // Student ID, dapat unique
            $table->string('course'); // Kurso
            $table->string('section')->nullable(); // Seksyon (opsyonal, pwedeng walang laman)
            $table->string('year_level')->nullable(); // Antas ng Taon (opsyonal, pwedeng walang laman)
            $table->timestamps(); // created_at at updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};