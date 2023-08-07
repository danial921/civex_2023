<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cesc_form extends Model
{
    use HasFactory;

    protected $table = 'cesc_teams';

    protected $fillable = 
    [
        'id_user',
        'nama_tim', 
        'ketua_nama', 
        'sekolah',
        'ketua_email',
        'ketua_notelp',
        'bukti_bayar',
        'status_tim'
    ];
}
