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
        if (Schema::hasTable('bracket_peserta')) {
            Schema::drop('bracket_peserta');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('bracket_peserta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_pertandingan_id')->nullable();
            $table->unsignedBigInteger('player_id')->nullable();
            $table->integer('position')->nullable();
            $table->timestamps();
        });
    }
};
