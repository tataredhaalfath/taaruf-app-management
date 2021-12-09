<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CvGambarDiriRequest extends FormRequest
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
            'moto' => 'required|max:255',
            'target_hidup' => 'required|max:255',
            'kegiatan_wl' => 'required|max:255',
            'hal_disukai' => 'required|max:255',
            'sisi_negatif' => 'required|max:255',
            'merokok' => 'required|max:255',
        ];
    }
}
