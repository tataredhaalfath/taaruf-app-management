<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CvPendidikanRequest extends FormRequest
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
            'sma' => 'required|max:255',
            'jurusan_sma' => 'required|max:255',
            'univ' => 'required|max:255',
            'jurusan_univ' => 'required|max:255'
        ];
    }
}
