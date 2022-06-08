<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_city', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('config_state_fk');
            $table->foreign('config_state_fk')->references('id')->on('config_state');
            $table->string('parameter');
            $table->string('description', '500')->nullable();
            $table->integer('index')->nullable();
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
        Schema::dropIfExists('config_city');
    }
}
