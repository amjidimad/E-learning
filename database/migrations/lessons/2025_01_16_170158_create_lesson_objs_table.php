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
        Schema::create('lesson_objs', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'lesson_id')->constrained('lessons')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title_obj');
            $table->string('des_obj');
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
        Schema::dropIfExists('lesson_objs');
    }
};
