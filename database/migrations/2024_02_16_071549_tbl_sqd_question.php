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
        Schema::create('tbl_sqd_question', function (Blueprint $table) {
            $table->id();
            $table->string('question_no');
            $table->string('question');
            $table->string('choices1');
            $table->string('choices2');
            $table->string('choices3');
            $table->string('choices4');
            $table->string('choices5');
            $table->string('choices6');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_sqd_question');
    }
};
