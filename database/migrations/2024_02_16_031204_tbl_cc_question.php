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
        Schema::create('tbl_cc_question', function (Blueprint $table) {
            $table->id();
            $table->string('question_no');
            $table->string('question');
            $table->string('choices1');
            $table->string('choices2');
            $table->string('choices3');
            $table->string('choices4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_cc_question');
    }
};
