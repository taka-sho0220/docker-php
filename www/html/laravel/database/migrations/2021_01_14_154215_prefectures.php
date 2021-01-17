<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prefectures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefectures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('region_id');//regions('id')
            $table->string('name')->primary();
            $table->foreign('region_id')->references('id')->on('regions');
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
        Schema::dropIfExists('prefectures');
    }
}
