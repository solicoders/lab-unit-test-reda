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
        Schema::create('questions', function (Blueprint $blueprint) {
            $blueprint->id()->autoIncrement();
            $blueprint->string('question');
            $blueprint->text('reponse');
            $blueprint->rememberToken();
            $blueprint->timestamps();
            $blueprint->foreignId('test_id')->references('id')->on('tests');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
