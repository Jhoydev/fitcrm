<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionshipsToMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championship_member', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('score')->nullable();
            $table->integer('place')->nullable();
            $table->integer('bw')->nullable();
            $table->integer('bh')->nullable();
            $table->integer('r1')->nullable();
            $table->integer('r2')->nullable();
            $table->integer('r3')->nullable();

            $table->integer('championship_id')->unsigned();
            $table->foreign('championship_id')->references('id')->on('championships')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('championship_member');
    }
}
