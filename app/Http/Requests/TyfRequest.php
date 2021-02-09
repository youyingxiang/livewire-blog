<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TyfRequest extends FormRequest
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
            'breakfast' => 'string|nullable',
            'lunch' => 'string|nullable',
            'dinner' => 'string|nullable',
            'weight' => 'numeric|nullable',
            'created_at' => 'date|nullable',
            //
        ];
    }

    public function messages()
    {
        return [
            'weight.numeric' => '体重必须为一个数字！',
        ];
    }

    public function validated()
    {
        return $this->validator->validated();
    }
}
