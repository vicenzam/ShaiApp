<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgressTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egress_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('egress_id')->unsigned();
            $table->string('name', 128);
            $table->string('color', 128);           
            $table->mediumText('description')->nullable();
            $table->timestamps();

            //Relaciones
            $table->foreign('egress_id')->references('id')->on('egresses');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egress_tags');
    }
}
