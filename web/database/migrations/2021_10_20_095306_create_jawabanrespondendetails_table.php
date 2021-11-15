<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanrespondendetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabanrespondendetails', function (Blueprint $table) {
            $table->string('kd_pertanyaan',5);
            $table->string('kd_jawaban',10);
            $table->text('jawaban');
            // relasi jawaban responden
            $table->unsignedInteger('id_jawabanresponden')->nullable();
            $table->foreign('id_jawabanresponden')
                ->on('jawabanrespondens')
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
        Schema::dropIfExists('jawabanrespondendetails');
    }
}
