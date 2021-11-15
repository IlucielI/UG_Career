<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDatawebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datawebs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_web',25);
            $table->string('no_telp',15);
            $table->string('email',30);
            $table->text('alamat');
            $table->string('jam_pelayanan',50);
            $table->timestamps();
        });

        DB::table('datawebs')->insert(
            array(
                'nama_web' => 'UG Career Center',
                'no_telp' => '087878787878',
                'email' => 'career@gunadarma.ac.id',
                'alamat' => 'Kampus D, Jl. Margonda Raya 100 - Depok',
                'jam_pelayanan' => 'Senin - Jumat, 10.00-15.00',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datawebs');
    }
}
