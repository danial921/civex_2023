<?php

namespace App\Http\Requests\gec;

use Illuminate\Foundation\Http\FormRequest;

class aanwizingRequest extends FormRequest
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
            // 'aanwijzing_judul' => 'required',
            'aanwijzing_tanya' => 'required'
        ];
    }
}
