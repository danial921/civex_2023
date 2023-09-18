<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workshop_registrants extends Model
{
    use HasFactory;

    protected $table = 'workshop_registrants';

    protected $fillable = [
        'nama',
        'instansi',
        'email',
        'notelp',
        'bundle',
        'bukti_bayar'
    ];
}
