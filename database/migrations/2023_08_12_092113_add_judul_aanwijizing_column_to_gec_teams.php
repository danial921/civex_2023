<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJudulAanwijizingColumnToGecTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gec_teams', function (Blueprint $table) {
            $table->string('aanwijzing_judul')->nullable();
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
        Schema::table('gec_teams', function (Blueprint $table) {
            $table->string('aanwijzing_tanya')->change();
            $table->string('aanwijzing_jawab')->change();
        });
    }
}
