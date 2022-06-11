<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employerrs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('Adsoy',150);
            $table->date('DateBirthDay')->nullable();
            $table->string('department');
            $table->integer('tel_number');
            $table->string('image',75)->nullable();
            $table->string('status');
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
        Schema::dropIfExists('employerrs');
    }
}
