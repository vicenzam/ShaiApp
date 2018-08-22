<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('income_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->timestamps();

            //Relacion
            $table->foreign('income_id')->references('id')->on('incomes');
            $table->foreign('tag_id')->references('id')->on('tags');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_tag');
    }
}
