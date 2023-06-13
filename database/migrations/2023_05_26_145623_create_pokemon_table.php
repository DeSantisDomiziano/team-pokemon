<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('total');
            $table->tinyInteger('hp')->unsigned();
            $table->tinyInteger('attack')->unsigned();
            $table->tinyInteger('defense')->unsigned();
            $table->tinyInteger('sp_atk')->unsigned();
            $table->tinyInteger('sp_def')->unsigned();
            $table->tinyInteger('speed')->unsigned();
            $table->boolean('legendary')->default(false);
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
        Schema::dropIfExists('pokemon');
    }
};
