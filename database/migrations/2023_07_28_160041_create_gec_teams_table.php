<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGecTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gec_teams', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->default(0);
            $table->string('nama_tim')->default('-');
            $table->string('institusi')->default('-');
            $table->string('alamat_institusi')->default('-');
            $table->string('dosen_pembimbing')->default('-');
            $table->string('ketua_nama')->default('-');
            $table->string('ketua_prodi')->default('-');
            $table->string('ketua_nim')->default('-');
            $table->string('ketua_notelp')->default('-');
            $table->string('ketua_email')->default('-');
            $table->string('anggota1_nama')->default('-');
            $table->string('anggota1_prodi')->default('-');
            $table->string('anggota1_nim')->default('-');
            $table->string('anggota2_nama')->default('-');
            $table->string('anggota2_prodi')->default('-');
            $table->string('anggota2_nim')->default('-');
            $table->string('file_zip')->default('-');
            $table->string('status_tim')->default('-');
            $table->string('aanwijzing_tanya')->nullable();
            $table->string('aanwijzing_jawab')->nullable();
            $table->string('submission_proposal')->nullable();
            $table->integer('status_proposal')->default(0);
            $table->string('bukti_bayar')->default('-');

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
        Schema::dropIfExists('gec_teams');
    }
}
