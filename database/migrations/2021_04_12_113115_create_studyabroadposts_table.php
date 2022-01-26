<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyabroadpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studyabroadposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topic');
            $table->string('topic_slug');
            $table->string('topic_number');
            $table->text('content');
            $table->string('title');
            $table->string('description');
            $table->string('keyword');
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
        Schema::dropIfExists('studyabroadposts');
    }
}
