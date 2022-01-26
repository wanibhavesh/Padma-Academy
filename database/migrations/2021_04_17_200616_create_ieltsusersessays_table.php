<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIeltsusersessaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ieltsusersessays', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('user');
            $table->text('ans1');
            $table->text('ans2');
            $table->string('band');
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
        Schema::dropIfExists('ieltsusersessays');
    }
}
