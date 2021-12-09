<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CvGambarFisikRequest extends FormRequest
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
            'bentuk_fisik' => 'required|max:255',
            'warna_kulit' => 'required|max:254',
            'tinggi' => 'required|integer',
            'berat' => 'required|integer',
            'riwayat_penyakit' => 'required|max:255',
            'golongan_darah' => 'required|max:255',
            'cacat_fisik' => 'required|max:255',
            'tipe_rambut' => 'required|max:255',
            'warna_mata' => 'required|max:255',
            'tanda_lahir' => 'required|max:255',
        ];
    }
}
