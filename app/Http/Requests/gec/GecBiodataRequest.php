<?php

namespace App\Http\Requests\gec;

use Illuminate\Foundation\Http\FormRequest;

class GecBiodataRequest extends FormRequest
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
            'dosen_pembimbing' => 'required',
            'ketua_nama' => 'required|string',
            'ketua_prodi' => 'required', 
            'ketua_notelp' => 'required|numeric',
            'ketua_nim' => 'required',
            'anggota1_nama' => 'required',
            'anggota1_prodi' => 'required',
            'anggota1_nim' => 'required',
            'anggota2_nama' => 'required',
            'anggota2_prodi' => 'required',
            'anggota2_nim' => 'required',
            'file_zip' => 'required|mimes:pdf|max:2048'
        ];
    }
}
