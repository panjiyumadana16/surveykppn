<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_surveys', function (Blueprint $table) {
            $table->increments('js_id');
            $table->integer('js_jawabansurveyid');
            $table->integer('js_surveyid');
            $table->integer('js_pertanyaanid');
            $table->text('js_jawaban')->nullable();
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
        Schema::dropIfExists('jawaban_surveys');
    }
}
