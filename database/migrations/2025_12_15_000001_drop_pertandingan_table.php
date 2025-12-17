<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasTable('pertandingan')) {
            Schema::drop('pertandingan');
        }
    }

    public function down()
    {
        Schema::create('pertandingan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_pertandingan_id')->nullable();
            $table->unsignedBigInteger('unit1_id')->nullable();
            $table->unsignedBigInteger('unit2_id')->nullable();
            $table->unsignedBigInteger('arena_id')->nullable();
            $table->unsignedBigInteger('winner_id')->nullable();
            $table->integer('round_number')->nullable();
            $table->integer('match_number')->nullable();
            $table->timestamps();
        });
    }
};
