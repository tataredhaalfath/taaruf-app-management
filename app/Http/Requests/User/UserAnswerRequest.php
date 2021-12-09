<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserAnswerRequest extends FormRequest
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
            'uq_id' => 'required|integer',
            'user_id' => 'required|integer',
            'jawaban_1' => 'required|max:255',
            'jawaban_2' => 'required|max:255',
            'jawaban_3' => 'required|max:255',
        ];
    }
}
