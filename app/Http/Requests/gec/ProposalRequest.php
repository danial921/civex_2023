<?php

namespace App\Http\Requests\gec;

use Illuminate\Foundation\Http\FormRequest;

class ProposalRequest extends FormRequest
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
            'submission_proposal' => 'required|mimes:pdf|max:2048',
            'submission_excel' => 'required|mimes:csv,xls,xlsx|max:2048',
            'url_video' => 'required'
        ];
    }
}
