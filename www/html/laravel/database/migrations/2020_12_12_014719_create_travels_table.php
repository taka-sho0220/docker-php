<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('travels')){
            Schema::create('travels', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('place');
                $table->string('gender');
                $table->string('age');
                $table->string('evaluation');
                $table->text('impressions');
                $table->string('terms');
                $table->unsignedBigInteger('prefecture_id');
                $table->unsignedBigInteger('region_id');
                $table->foreign('prefecture_id')->references('id')->on('prefectures');
                $table->foreign('region_id')->references('id')->on('regions');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
