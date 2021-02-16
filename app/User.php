<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_lengkap', 'email', 'password','nomor_ktp','nomor_npwp','id_pekerjaan','kewarganegaraan','tempat_lahir','tanggal_lahir','jenis_kelamin','nomor_telepon','alamat','id_propinsi','id_kota',
        'kelurahan','kecamatan','kode_pos','id_pendidikan','nama_ibu_kandung','status_tinggal','status_menikah','jumlah_kartu_kredit','nomor_bpjs_ketenagakerjaan','nomor_asuransi',
        'nama_asuransi','status_email_verifikasi','tanggal_verifikasi_email','status','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_verifikasi_email' => 'datetime',
    ];
}
