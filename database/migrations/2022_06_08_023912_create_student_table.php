<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nric');
            $table->string('name');
            $table->string('contact_number');
            $table->string('address', '500');
            $table->unsignedBigInteger('config_state_fk');
            $table->foreign('config_state_fk')->references('id')->on('config_state');
            $table->unsignedBigInteger('config_city_fk');
            $table->foreign('config_city_fk')->references('id')->on('config_city');
            $table->string('postcode', '5');

            $table->unsignedBigInteger('config_ethnicity_fk');
            $table->foreign('config_ethnicity_fk')->references('id')->on('config_ethnicity');
            $table->unsignedBigInteger('config_religion_fk');
            $table->foreign('config_religion_fk')->references('id')->on('config_religion');



            $table->string('email')->nullable();
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
        Schema::dropIfExists('students');
    }
}
