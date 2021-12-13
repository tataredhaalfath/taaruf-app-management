<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class TaarufTransactionRequest extends FormRequest
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
            'taaruf_id' => 'required|integer',
            'user_id' => 'required|integer',
            'status' => 'required|max:255',
            'alasan' => 'required|max:255',
        ];
    }
}
