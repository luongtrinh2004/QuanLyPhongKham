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
        $table->id(); // ID tự động tăng
        $table->string('name'); // Cột tên
        $table->integer('age'); // Cột tuổi
        $table->string('email'); // Cột email
        $table->timestamps(); // Cột thời gian
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
