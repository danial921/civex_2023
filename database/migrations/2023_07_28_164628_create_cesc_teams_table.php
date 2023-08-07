<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCescTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cesc_teams', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->default(0);
            $table->string('nama_tim')->default('-');
            $table->string('sekolah')->default('-');
            $table->string('ketua_email')->default('-');
            $table->string('ketua_nama')->default('-');
            $table->string('ketua_notelp')->default('-');
            $table->string('ketua_kelas')->default('-');
            $table->string('ketua_kartu')->default('-');
            $table->string('ketua_foto')->default('-');
            $table->string('ketua_follow')->default('-');
            $table->string('ketua_twibbon')->default('-');
            $table->string('anggota_nama')->default('-');
            $table->string('anggota_notelp')->default('-');
            $table->string('anggota_kelas')->default('-');
            $table->string('anggota_kartu')->default('-');
            $table->string('anggota_foto')->default('-');
            $table->string('anggota_follow')->default('-');
            $table->string('anggota_twibbon')->default('-');
            $table->string('status_tim')->default('-');
            $table->string('aanwijzing_tanya')->default('-');
            $table->string('aanwijzing_jawab')->default('-');
            $table->string('submission_proposal')->default('-');
            $table->string('status_proposal')->default('-');
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
        Schema::dropIfExists('cesc_teams');
    }
}
