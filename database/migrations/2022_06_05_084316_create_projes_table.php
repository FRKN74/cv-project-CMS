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
        Schema::create('projes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proje_id');

            $table->string('title');
            $table->string('slug');


            $table->string('ad_soyad');
            
            $table->string('link');
            $table->longText('description');


            $table->string('image1');
            $table->string('image2');
            $table->string('image3');

            $table->timestamps();

            $table->foreign('proje_id')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projes');
    }
};
