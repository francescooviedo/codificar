<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('spendings', function (Blueprint $table) {
            $table->id();
            $table->string('congressperson_id');
            $table->foreign('congressperson_id')->references('id')->on('deputies')->onDelete('cascade');
            $table->integer('value');
            $table->integer('month');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spendings');
    }
};
