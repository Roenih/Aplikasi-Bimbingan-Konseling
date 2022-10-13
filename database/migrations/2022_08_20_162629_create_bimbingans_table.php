<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbingans', function (Blueprint $table) {
            $table->string('nis',20)->primary();
            $table->string('nm_siswa');
            $table->string('nm_kelas');
            $table->string('tgl_konsultasi',15);
            // $table->string('kode_kelas');
            $table->string('jenis_masalah');
            $table->string('diskripsi_bimbingan');
            $table->string('penyelesaian');
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
        Schema::dropIfExists('bimbingans-index');
    }
}
