<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CvKriteriaRequest extends FormRequest
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
            'cv_id' => 'required|integer',
            'tinggi' => 'required|max:255',
            'suku' => 'required|max:255',
            'usia' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'tambahan' => 'required|max:255',
        ];
    }
}
