<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('income_id')->unsigned();
            $table->string('name', 128);
            $table->string('color', 128);           
            $table->mediumText('description')->nullable();
            $table->timestamps();

            //Relaciones
            $table->foreign('income_id')->references('id')->on('incomes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_tags');
    }
}
