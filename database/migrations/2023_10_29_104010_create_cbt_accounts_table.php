<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbtAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbt_accounts', function (Blueprint $table) {
            $table->id();
            $table->string("register_name", 255)->nullable();
            $table->string("register_no_hp", 255)->nullable();
            $table->string("register_email", 255)->nullable();
            $table->string("register_password", 255)->nullable();
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
        Schema::dropIfExists('cbt_accounts');
    }
}
