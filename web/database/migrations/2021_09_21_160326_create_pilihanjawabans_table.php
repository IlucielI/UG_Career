<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihanjawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihanjawabans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('jawaban');
            $table->string('kd_jawaban',10);
            //relasi dengan pertanyaan
            $table->unsignedInteger('id_pertanyaan')->nullable();
            $table->foreign('id_pertanyaan')
                ->on('pertanyaans')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('pilihanjawabans');
    }
}
