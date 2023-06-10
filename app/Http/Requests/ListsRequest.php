<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'age' => 'numeric|between:0,150',
            'mail' => 'email',
        ];
    }

    public function messages () {
        return [
            'name.required' => '名前は必ず入力してください。',
            'age.numeric' => '年齢は整数で入力してください。',
            'age.between' => '年齢は0~150の間で入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
        ];
    }
}
