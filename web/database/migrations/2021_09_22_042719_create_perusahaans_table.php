<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{

    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('alamat');
            $table->string('no_telp',15);
            $table->string('url_web',100);
            $table->string('nama_cp',25);
            $table->string('jabatan',100);
            $table->string('email_cp',100);
            //relasi user
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('perusahaans');
    }
}
