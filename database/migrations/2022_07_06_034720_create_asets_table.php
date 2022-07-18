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
        Schema::create('asets', function (Blueprint $table) {
            $table->id();
            $table->string('no_sertifikat');
            $table->string('nama_aset');
            $table->string('alamat_aset');
            $table->string('luas_aset');
            $table->string('status_aset');
            $table->string('kondisi_aset');
            $table->string('kondisi_geografis');
            $table->string('asalusul_aset');
            $table->string('th_kepemilikan');
            $table->string('th_pembangunan');
            $table->string('th_rehab');
            $table->string('keterangan_aset');
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
        Schema::dropIfExists('asets');
    }
};
