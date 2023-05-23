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
        Schema::create('shools_teacher', function (Blueprint $table) {
            $table->unsignedBigInteger('school_Id');
            $table->teforeign('school_Id')
                ->references('schoolId')
                ->on('school');
            $table->unsignedBigInteger ('teacher_Id');
            $table->foreign('teacher_Id')
            ->references('teacherId')
            ->on('teacher');
            $table->string('value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shools_teacher');
    }
};
