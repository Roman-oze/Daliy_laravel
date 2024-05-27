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
        Schema::create('_students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string("name",50,);
            $table->string("email",50);
            $table->enum('gender',["M","F","o"]);
            $table->text('address',150);
            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_students');
    }
};
