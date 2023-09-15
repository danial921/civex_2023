<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cppc_team extends Model
{
    use HasFactory;
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cppc_teams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'nama_tim',
        'institusi',
        'alamat_institusi',
        'ketua_nama',
        'ketua_prodi',
        'ketua_nim',
        'ketua_email',
        'ketua_notelp',
        'ketua_ktm',
        'ketua_sk',
        'anggota1_nama',
        'anggota1_prodi',
        'anggota1_nim',
        'anggota1_email',
        'anggota1_notelp',
        'anggota1_ktm',
        'anggota1_sk',
        'anggota2_nama',
        'anggota2_prodi',
        'anggota2_nim',
        'anggota2_email',
        'anggota2_notelp',
        'anggota2_ktm',
        'anggota2_sk',
        'form_pendaftaran',
        'status_tim',
        'submission_proposal',
        'status_proposal',
        'aanwijzing_tanya',
        'aanwijzing_jawab',
        'bukti_bayar',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status_proposal' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
