<?php

namespace App\Http\Requests\cppc;

use Illuminate\Foundation\Http\FormRequest;

class CppcBiodataRequest extends FormRequest
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
            'institusi' => 'required', 
            'alamat_institusi' => 'required',
            'ketua_nama' => 'required|string',
            'ketua_prodi' => 'required', 
            'ketua_notelp' => 'required|numeric',
            'ketua_email' => 'required|email',
            'ketua_nim' => 'required',
            'ketua_ktm' => 'required|file|max:2048',
            'ketua_sk' => 'required|file|max:2048',
            'anggota1_nama' => 'required',
            'anggota1_prodi' => 'required',
            'anggota1_nim' => 'required',
            'anggota1_notelp' => 'required|numeric',
            'anggota1_email' => 'required|email',
            'anggota1_ktm' => 'required|file|max:2048',
            'anggota1_sk' => 'required|file|max:2048',
            'anggota2_nama' => 'required',
            'anggota2_prodi' => 'required',
            'anggota2_nim' => 'required',
            'anggota2_notelp' => 'required|numeric',
            'anggota2_email' => 'required|email',
            'anggota2_ktm' => 'required|file|max:2048',
            'anggota2_sk' => 'required|file|max:2048',
            'form_pendaftaran' => 'required|file|mimes:pdf|max:2048'
            
        ];
    }
}
