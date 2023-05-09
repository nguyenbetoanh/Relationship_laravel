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
        Schema::create('teacher', function (Blueprint $table) {
            $table->id('teacherId');
            $table->string('teacherName');
            $table->string('subject');
            $table->timestamps();
            //quan hệ 1 1 vs class
            $table->unsignedBigInteger('class_Id');
            $table->foreign('class_Id')
                ->references('classId')
                ->on('class_its');
                // ->onDelete('cascade')
                //->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};
