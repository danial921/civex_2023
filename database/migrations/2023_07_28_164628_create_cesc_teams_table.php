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
            $table->integer('id_user');
            $table->string('nama_tim');
            $table->string('sekolah');
            $table->string('ketua_email');
            $table->string('ketua_nama');
            $table->string('ketua_notelp');
            $table->string('ketua_kartu');
            $table->string('ketua_foto');
            $table->string('ketua_follow');
            $table->string('ketua_twibbon');
            $table->string('anggota_nama');
            $table->string('anggota_notelp');
            $table->string('anggota_kartu');
            $table->string('anggota_foto');
            $table->string('anggota_follow');
            $table->string('anggota_twibbon');
            $table->string('status_tim');
            $table->string('aanwijzing_tanya');
            $table->string('aanwijzing_jawab');
            $table->string('submission_proposal');
            $table->string('status_proposal');
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
