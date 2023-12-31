<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webinar_registrants extends Model
{
    use HasFactory;
    
    protected $table = 'webinar_registrants';

    protected $fillable = [
        'nama',
        'email',
        'instansi',
        // 'unique_code',
        'bukti_bayar'
    ];
}
