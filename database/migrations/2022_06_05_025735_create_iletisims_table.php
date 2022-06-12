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
        Schema::create('iletisims', function (Blueprint $table) {
            $table->id();
            $table->string('adres');
            $table->string('slug')->defult('iletisim');
            $table->string('tel');
            $table->string('mail');
            $table->string('meslek');
            $table->longText('harita');
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
        Schema::dropIfExists('iletisims');
    }
};
