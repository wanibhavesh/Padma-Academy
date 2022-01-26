<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class_slug');
            $table->string('chapter_slug');
            $table->integer('chapter_number');
            $table->string('subtopic');
            $table->string('subtopic_slug');
            $table->string('subtopic_number');
            $table->text('content');
            $table->float('post_id');
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
        Schema::dropIfExists('contents');
    }
}
