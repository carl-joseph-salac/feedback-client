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
        Schema::create('tbl_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('clientNumber');
            $table->string('feedbackNumber');
            $table->string('cc1');
            $table->string('cc2');
            $table->string('cc3');
            $table->string('sqd0');
            $table->string('sqd1');
            $table->string('sqd2');
            $table->string('sqd3');
            $table->string('sqd4');
            $table->string('sqd5')->nullable();
            $table->string('sqd6');
            $table->string('sqd7');
            $table->string('sqd8');
            $table->timestamp('feedback_date')->userCurrent();
            $table->string('suggestion')->nullable();
            $table->index(['feedbackNumber']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_feedback');
    }
};
