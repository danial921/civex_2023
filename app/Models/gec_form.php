<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gec_form extends Model
{
    use HasFactory;

    protected $table = 'gec_teams';

    protected $fillable = 
    [
        'id_user',
        'nama_tim', 
        'ketua_nama', 
        'institusi',
        'ketua_email',
        'ketua_notelp',
        'bukti_bayar',
        'status_tim'
    ];
}
