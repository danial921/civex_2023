<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopRegistrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_registrants', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255)->nullable();
            $table->string('instansi', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('notelp', 255)->nullable();
            $table->enum('bundle', ['1', '2', '3'])->nullable();
            $table->string('bukti_bayar', 255)->nullable();
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
        Schema::dropIfExists('workshop_registrants');
    }
}
