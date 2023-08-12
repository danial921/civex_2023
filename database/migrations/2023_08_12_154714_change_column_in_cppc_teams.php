<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnInCppcTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cppc_teams', function (Blueprint $table) {
            $table->dropColumn('berkas_kebutuhan');
            $table->string('ppt')->default('-');
            $table->string('url_video')->default('-');
            $table->integer('status_berkas_final')->default(0);
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
            //
        });
    }
}
