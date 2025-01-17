<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   

    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('lesson_id')->constrained('lessons')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('langue');
            $table->string('video_path');
            $table->string('image_path');
            $table->text('prerequis');
            $table->float('reduction');
            $table->float('price');
            $table->float('duree');
            $table->string('level');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
