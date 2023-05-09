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
        Schema::create('class_its', function (Blueprint $table) {
            $table->id('classId');
            $table->string('className', 100);
            $table->float('price');
            $table->boolean('classStatus')->default(1);
            $table->timestamps();
            // quan hệ 1 nhiều
            $table->unsignedBigInteger('school_Id');
            $table->foreign('school_Id')
                ->references('schoolId')
                ->on('school');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_its');
    }
};
