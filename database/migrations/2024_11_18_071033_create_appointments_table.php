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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('vaccine');
            $table->string('parent');
            $table->string('child');
            $table->string('contact');
            $table->integer('age');
            $table->string('doctor');
            $table->string('hospital');
            $table->date('app_date');
            $table->integer('userId');
            $table->string('userName');
            $table->string('token')->nullable();
            $table->string('Status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
