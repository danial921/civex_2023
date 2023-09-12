<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gec_team extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gec_teams';

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
        'dosen_pembimbing',
        'ketua_nama',
        'ketua_prodi',
        'ketua_nim',
        'ketua_notelp',
        'ketua_email',
        'anggota1_nama',
        'anggota1_prodi',
        'anggota1_nim',
        'anggota2_nama',
        'anggota2_prodi',
        'anggota2_nim',
        'file_zip',
        'status_tim',
        'aanwijzing_tanya',
        'aanwijzing_jawab',
        'submission_proposal',
        'status_proposal',
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
