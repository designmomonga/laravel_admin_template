<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // 入力内容を変数に代入
        $input = $this->input();
        return [
            'last_name' => 'required',
            'first_name' => 'required',
            'last_name_kana' => 'required|hiragana',
            'first_name_kana' => 'required|hiragana',
            //'email' => 'required|email|unique:users,email,' . $input['id'] . ',id',
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->id)->whereNull('deleted_at')],
            'password' => ['required', 'alphabet_num_dash', Password::min(8)->numbers()],
        ];
    }

    public function messages(): array
    {
        return [
            'last_name.required' => '入力必須項目です。',
            'first_name.required' => '入力必須項目です。',
            'last_name_kana.required' => '入力必須項目です。',
            'last_name_kana.hiragana' => 'ひらがなで入力して下さい。',
            'first_name_kana.required' => '入力必須項目です。',
            'first_name_kana.hiragana' => 'ひらがなで入力して下さい。',
            'email.required' => '入力必須項目です。',
            'email.email' => 'メールアドレスの書式が正しくありません。',
            'email.unique' => 'そのメールアドレスは既に使用中です。',
            'password.required' => '入力必須項目です。',
            'password.alphabet_num_dash' => '英数字です。',
        ];
    }
}
