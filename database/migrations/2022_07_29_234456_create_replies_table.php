<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('thread_id');
            $table->string('user_name', 20);
            $table->string('message', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('replies');
    }
}