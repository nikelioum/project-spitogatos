<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('title', 255);
            $table->longText('description')->nullable();
            $table->char('image', 255)->nullable();
            $table->integer('location_id');
            $table->integer('type_id');
            $table->integer('availability_id');
            $table->integer('price');
            $table->integer('meters');
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
        Schema::dropIfExists('appartments');
    }
}
