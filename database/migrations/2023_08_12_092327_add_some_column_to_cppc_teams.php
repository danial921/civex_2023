<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnToCppcTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cppc_teams', function (Blueprint $table) {
            $table->string('aanwijzing_judul')->default('-');
            $table->string('berkas_kebutuhan')->default('-');
            $table->text('aanwijzing_tanya')->change();
            $table->text('aanwijzing_jawab')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cppc_teams', function (Blueprint $table) {
            $table->string('aanwijzing_tanya')->change();
            $table->string('aanwijzing_jawab')->change();
        });
    }
}
