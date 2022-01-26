<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIeltslisteninguseranswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ieltslisteninguseranswers', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('user');
            $table->string('band')->nullable();
            $table->text('que1')->nullable();
            $table->string('ans1')->nullable();
            $table->text('que2')->nullable();
            $table->string('ans2')->nullable();
            $table->text('que3')->nullable();
            $table->string('ans3')->nullable();
            $table->text('que4')->nullable();
            $table->string('ans4')->nullable();
            $table->text('que5')->nullable();
            $table->string('ans5')->nullable();
            $table->text('que6')->nullable();
            $table->string('ans6')->nullable();
            $table->text('que7')->nullable();
            $table->string('ans7')->nullable();
            $table->text('que8')->nullable();
            $table->string('ans8')->nullable();
            $table->text('que9')->nullable();
            $table->string('ans9')->nullable();
            $table->text('que10')->nullable();
            $table->string('ans10')->nullable();
            $table->text('que11')->nullable();
            $table->string('ans11')->nullable();
            $table->text('que12')->nullable();
            $table->string('ans12')->nullable();
            $table->text('que13')->nullable();
            $table->string('ans13')->nullable();
            $table->text('que14')->nullable();
            $table->string('ans14')->nullable();
            $table->text('que15')->nullable();
            $table->string('ans15')->nullable();
            $table->text('que16')->nullable();
            $table->string('ans16')->nullable();
            $table->text('que17')->nullable();
            $table->string('ans17')->nullable();
            $table->text('que18')->nullable();
            $table->string('ans18')->nullable();
            $table->text('que19')->nullable();
            $table->string('ans19')->nullable();
            $table->text('que20')->nullable();
            $table->string('ans20')->nullable();
            $table->text('que21')->nullable();
            $table->string('ans21')->nullable();
            $table->text('que22')->nullable();
            $table->string('ans22')->nullable();
            $table->text('que23')->nullable();
            $table->string('ans23')->nullable();
            $table->text('que24')->nullable();
            $table->string('ans24')->nullable();
            $table->text('que25')->nullable();
            $table->string('ans25')->nullable();
            $table->text('que26')->nullable();
            $table->string('ans26')->nullable();
            $table->text('que27')->nullable();
            $table->string('ans27')->nullable();
            $table->text('que28')->nullable();
            $table->string('ans28')->nullable();
            $table->text('que29')->nullable();
            $table->string('ans29')->nullable();  
            $table->text('que30')->nullable();
            $table->string('ans30')->nullable();
            $table->text('que31')->nullable();
            $table->string('ans31')->nullable();
            $table->text('que32')->nullable();
            $table->string('ans32')->nullable();
            $table->text('que33')->nullable();
            $table->string('ans33')->nullable();
            $table->text('que34')->nullable();
            $table->string('ans34')->nullable();
            $table->text('que35')->nullable();
            $table->string('ans35')->nullable();
            $table->text('que36')->nullable();
            $table->string('ans36')->nullable();
            $table->text('que37')->nullable();
            $table->string('ans37')->nullable();
            $table->text('que38')->nullable();
            $table->string('ans38')->nullable();
            $table->text('que39')->nullable();
            $table->string('ans39')->nullable();  
            $table->text('que40')->nullable();
            $table->string('ans40')->nullable();
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
        Schema::dropIfExists('ieltslisteninguseranswers');
    }
}
