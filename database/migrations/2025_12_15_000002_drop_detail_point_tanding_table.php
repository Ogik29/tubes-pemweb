<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasTable('detail_point_tanding')) {
            Schema::drop('detail_point_tanding');
        }
    }

    public function down()
    {
        Schema::create('detail_point_tanding', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pertandingan_id')->nullable();
            $table->json('points')->nullable();
            $table->timestamps();
        });
    }
};
