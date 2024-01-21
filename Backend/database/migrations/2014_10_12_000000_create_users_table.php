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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('userName')->unique();
            $table->string('password');
            $table->string('photo')->nullable;
            $table->boolean('isAdmin');
            //$table->foreignId('group_id');
            //$table->foreignId('jobposition_id');
            //$table->foreign('group_id')->references('id')->on('Groups')->cascadeOnDelete();
            //$table->foreign('jobposition_id')->references('id')->on('JobPositions')->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
