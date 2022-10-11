<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_parents', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');

            //Father Information
            $table->string('father_name');
            $table->string('father_national_id');
            $table->string('father_passport_id');
            $table->string('father_phone');
            $table->string('father_job');

            $table->unsignedBigInteger('father_nationality_id');
            $table->foreign('father_nationality_id')->references('id')->on('nationalities')->onDelete('cascade');

            $table->unsignedBigInteger('father_religion_id');
            $table->foreign('father_religion_id')->references('id')->on('religions')->onDelete('cascade');


            $table->unsignedBigInteger('father_type_blood_id');
            $table->foreign('father_type_blood_id')->references('id')->on('type_bloods')->onDelete('cascade');

            $table->string('father_address');



            //Mother Information
            $table->string('mother_name');
            $table->string('mother_national_id');
            $table->string('mother_passport_id');
            $table->string('mother_phone');
            $table->string('mother_job');

            $table->unsignedBigInteger('mother_nationality_id');
            $table->foreign('mother_nationality_id')->references('id')->on('nationalities')->onDelete('cascade');

            $table->unsignedBigInteger('mother_religion_id');
            $table->foreign('mother_religion_id')->references('id')->on('religions')->onDelete('cascade');


            $table->unsignedBigInteger('mother_type_blood_id');
            $table->foreign('mother_type_blood_id')->references('id')->on('type_bloods')->onDelete('cascade');

            $table->string('mother_address');





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
        Schema::dropIfExists('my_parents');
    }
};
