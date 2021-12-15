<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'user_id' => 'integer|required',
            'image' => 'image|max:2000',
            'telpon' => 'required|max:255',
            'gender' => 'required|max:255',
            'kota' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'umur' => 'required|max:255|integer',
            'pendidikan_ahir' => 'required|max:255',
            'tagline' => 'required|max:255',
        ];
    }
}
