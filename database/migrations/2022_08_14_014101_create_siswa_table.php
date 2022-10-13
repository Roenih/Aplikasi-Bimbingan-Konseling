<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nis',20)->primary();
            $table->string('nm_siswa',50);
            $table->string('kode_kelas',5);
            $table->date('tgl_lahir',15);
            $table->enum('jenkel',['Laki-laki','perempuan'])->default('laki-laki');
            $table->string('nm_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('no_tlp',15);
            $table->text('alamat');
            $table->string('email',50);
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
        Schema::dropIfExists('siswa-index');
    }
}
