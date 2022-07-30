<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name', 20);
            $table->string('message_title', 50);
            $table->string('message', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('threads');
    }
}