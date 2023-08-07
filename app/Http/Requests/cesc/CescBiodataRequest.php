<?php

namespace App\Http\Requests\cesc;

use Illuminate\Foundation\Http\FormRequest;

class CescBiodataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_tim' => 'required', 
            'sekolah' => 'required', 
            'ketua_nama' => 'required',
            'ketua_notelp' => 'required|numeric',
            'ketua_kelas' => 'required',
            'ketua_kartu' => 'required|file|max:2048',
            'ketua_foto' => 'required|file|max:2048',
            'ketua_follow' => 'required|file|max:2048',
            'ketua_twibbon' => 'required|file|max:2048',
            'anggota_nama' => 'required',
            'anggota_notelp' => 'required|numeric',
            'anggota_kelas' => 'required',
            'anggota_kartu' => 'required|file|max:2048',
            'anggota_foto' => 'required|file|max:2048',
            'anggota_follow' => 'required|file|max:2048',
            'anggota_twibbon' => 'required|file|max:2048',
            
        ];
    }
}
