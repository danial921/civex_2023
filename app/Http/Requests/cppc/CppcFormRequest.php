<?php

namespace App\Http\Requests\cppc;

use Illuminate\Foundation\Http\FormRequest;

class CppcFormRequest extends FormRequest
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
            'nama_tim' => 'required|unique:cppc_teams,nama_tim|string', 
            'ketua_nama' => 'required|string', 
            'institusi' => 'required', 
            'ketua_notelp' => 'required|numeric',
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
