<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return [
            'required',
            'string',
            new Password,
            'confirmed',
            'regex:/\A([a-zA-Z0-9_-])+\z/u'//追加（英数、ハイフン、アンダースコアのみ）
        ];
    }
}
