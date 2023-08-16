<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_materis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('video_materi')->nullable();
            $table->unsignedBigInteger('id_course')->nullable();
            $table->string('judul_bab');
            $table->string('judul_quiz');
            $table->string('soal_quiz');
            $table->string('jawaban_1');
            $table->string('jawaban_2');
            $table->string('jawaban_3');
            $table->string('jawaban_4');
            $table->string('jawaban_benar');
            $table->string('sertifikat')->nullable();
            $table->timestamps();

            $table->foreign('id_course')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_materis');
    }
}
