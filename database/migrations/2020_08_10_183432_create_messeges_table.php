<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messeges', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->charset('utf8');
            $table->string('phone', 50)->charset('utf8');
            $table->string('email', 50)->charset('utf8');
            $table->string('body', 1000)->charset('utf8');
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
        Schema::dropIfExists('messeges');
    }
}
