<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CvProfileRequest extends FormRequest
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
            'image' => 'image|max:2000',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:254',
            'tgl_lahir' => 'required|date',
            'umur' => 'required|integer',
            'agama' => 'required|max:255',
            'manhaj' => 'required|max:255',
            'status' => 'required|max:255',
            'menikah' => 'required|max:255',
            'suku' => 'required|max:255'
        ];
    }
}
