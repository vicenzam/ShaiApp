<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgressTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egress_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('egress_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->timestamps();

            //Relacion
            $table->foreign('egress_id')->references('id')->on('egresses');
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
        Schema::dropIfExists('egress_tag');
    }
}
