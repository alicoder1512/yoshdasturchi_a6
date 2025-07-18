<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->unsignedInteger('count'); // ijobiy butun sonlar uchun
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('facts');
    }
};
