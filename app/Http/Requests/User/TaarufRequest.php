<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class TaarufRequest extends FormRequest
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
            'user_id_1' => 'required|integer',
            'user_id_2' => 'required|integer',
            'status' => 'required|max:255',
        ];
    }
}
