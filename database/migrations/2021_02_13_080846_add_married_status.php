<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarriedStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_pernikahan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('tanggal_menikah')->nullable();
            $table->string('umur_pernikahan')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->string('alamat_pasangan')->nullable();
            $table->string('nomor_telepon_pasangan')->nullable();
            $table->string('email_pasangan')->nullable();
            $table->string('pekerjaan_pasangan')->nullable();
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
        //
    }
}
