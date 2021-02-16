<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('nomor_ktp')->nullable();
            $table->string('nomor_npwp')->nullable();
            $table->integer('id_pekerjaan')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin',['pria','wanita'])->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->integer('id_propinsi')->nullable();
            $table->integer('id_kota')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->integer('id_pendidikan')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->enum('status_tinggal',['milikpribadi','sewa'])->nullable();
            $table->enum('status_menikah',['belum_menikah','menikah','pernah_menikah'])->nullable();
            $table->integer('jumlah_kartu_kredit')->nullable();
            $table->integer('nomor_bpjs_ketenagakerjaan')->nullable();
            $table->integer('nomor_asuransi')->nullable();
            $table->integer('nama_asuransi')->nullable();
            $table->boolean('status_email_verifikasi')->nullable();
            $table->timestamp('tanggal_verifikasi_email')->nullable();
            $table->enum('status',['aktif','tidak_aktif'])->nullable();
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
        Schema::dropIfExists('users');
    }
}
