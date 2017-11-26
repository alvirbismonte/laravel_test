<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('description',255);
            $table->date('release_date');
            $table->integer('rating');
            $table->integer('ticket_price');
            $table->string('country',255);
            $table->string('photo',255);
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
        Schema::dropIfExists('films');
    }
}


