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
        Schema::create('hakkimdas', function (Blueprint $table) {
            $table->id();
            $table->longText('benkimim');
            $table->string('slug');

            $table->integer('yas');
            $table->string('ulke');
            $table->string('adres');
            $table->string('mail');
            $table->string('telefon');



            $table->string('image');

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
        Schema::dropIfExists('hakkimdas');
    }
};
