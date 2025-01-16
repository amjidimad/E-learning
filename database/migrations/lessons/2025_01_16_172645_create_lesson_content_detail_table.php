<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_content_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'lesson_content_id')->constrained('lesson_content')->onDelete('cascade')->onUpdate('cascade');
            $table->string('obj_lesson_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_content_detail');
    }
};