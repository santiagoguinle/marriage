<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('player_id');
            $table->unsignedInteger('question_option_id');
            $table->primary(['question_id', 'player_id','question_option_id']);
            $table->foreign('question_id')->references('id')->on('quiz_questions');
            $table->foreign('player_id')->references('id')->on('quiz_players');
            $table->foreign('question_option_id')->references('id')->on('quiz_question_options');
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
        Schema::dropIfExists('quiz_questions');
    }
}
