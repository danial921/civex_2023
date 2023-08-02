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
            $table->string('nama_tim');
            $table->string('institusi');
            $table->string('alamat_institusi');
            $table->string('dosen_pembimbing');
            $table->string('ketua_nama');
            $table->string('ketua_prodi');
            $table->string('ketua_nim');
            $table->string('ketua_notelp');
            $table->string('anggota1_nama');
            $table->string('anggota1_prodi');
            $table->string('anggota1_nim');
            $table->string('anggota2_nama');
            $table->string('anggota2_prodi');
            $table->string('anggota2_nim');
            $table->string('file_zip');
            $table->string('status_tim');
            $table->string('aanwijzing_tanya')->nullable();
            $table->string('aanwijzing_jawab')->nullable();
            $table->string('submission_proposal')->nullable();
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
        Schema::dropIfExists('gec_teams');
    }
}
