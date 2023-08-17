<?php

namespace App\Http\Requests\cppc;

use Illuminate\Foundation\Http\FormRequest;

class KebutuhanFinalRequest extends FormRequest
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
            'ppt' => 'required|mimes:ppt,pptx,pdf',
            'url_video' => 'required'
        ];
    }
}
