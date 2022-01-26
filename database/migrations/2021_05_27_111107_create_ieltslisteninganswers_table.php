<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIeltslisteninganswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ieltslisteninganswers', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('que1')->nullable();            
            $table->string('que2')->nullable();            
            $table->string('que3')->nullable();            
            $table->string('que4')->nullable();            
            $table->string('que5')->nullable();            
            $table->string('que6')->nullable();            
            $table->string('que7')->nullable();            
            $table->string('que8')->nullable();            
            $table->string('que9')->nullable();            
            $table->string('que10')->nullable();
            $table->string('que11')->nullable();
            $table->string('que12')->nullable();
            $table->string('que13')->nullable();
            $table->string('que14')->nullable();
            $table->string('que15')->nullable();
            $table->string('que16')->nullable();
            $table->string('que17')->nullable();
            $table->string('que18')->nullable();
            $table->string('que19')->nullable();
            $table->string('que20')->nullable();
            $table->string('que21')->nullable();
            $table->string('que22')->nullable();
            $table->string('que23')->nullable();
            $table->string('que24')->nullable();
            $table->string('que25')->nullable();
            $table->string('que26')->nullable();
            $table->string('que27')->nullable();
            $table->string('que28')->nullable();
            $table->string('que29')->nullable();
            $table->string('que30')->nullable();
            $table->string('que31')->nullable();
            $table->string('que32')->nullable();
            $table->string('que33')->nullable();
            $table->string('que34')->nullable();
            $table->string('que35')->nullable();
            $table->string('que36')->nullable();
            $table->string('que37')->nullable();
            $table->string('que38')->nullable();
            $table->string('que39')->nullable();
            $table->string('que40')->nullable();
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
        Schema::dropIfExists('ieltslisteninganswers');
    }
}
