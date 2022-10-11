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
        Schema::create('my_parent_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('my_parent_id');
            $table->foreign('my_parent_id')->references('id')->on('my_parents')->onDelete('cascade');
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
        Schema::dropIfExists('my_parent_attachments');
    }
};
