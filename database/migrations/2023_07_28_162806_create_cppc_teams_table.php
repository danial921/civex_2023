<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCppcTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cppc_teams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tim');
            $table->string('institusi');
            $table->string('alamat_institusi');
            $table->string('ketua_nama');
            $table->string('ketua_prodi');
            $table->string('ketua_nim');
            $table->string('ketua_email');
            $table->string('ketua_notelp');
            $table->string('ketua_ktm');
            $table->string('ketua_sk');
            $table->string('anggota1_nama');
            $table->string('anggota1_prodi');
            $table->string('anggota1_nim');
            $table->string('anggota1_email');
            $table->string('anggota1_notelp');
            $table->string('anggota1_ktm');
            $table->string('anggota1_sk');
            $table->string('anggota2_nama');
            $table->string('anggota2_prodi');
            $table->string('anggota2_nim');
            $table->string('anggota2_email');
            $table->string('anggota2_notelp');
            $table->string('anggota2_ktm');
            $table->string('anggota2_sk');
            $table->string('form_pendaftaran');
            $table->integer('status_tim');
            $table->string('submission_proposal');
            $table->integer('status_proposal');
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
        Schema::dropIfExists('cppc_teams');
    }
}
