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
        Schema::create('pokemon_type', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("pokemon_id");
            $table->foreign("pokemon_id")->references("id")->on("pokemon")->cascadeOnDelete();

            $table->unsignedBigInteger("type_id");
            $table->foreign("type_id")->references("id")->on("types")->cascadeOnDelete();

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
        Schema::dropIfExists('pokemon_type');
    }
};
