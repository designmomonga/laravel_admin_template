<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //ひらがな
        Validator::extend('hiragana', function($attribute, $value, $parameters, $validator){
            return preg_match('/^[ぁ-んー]+/u', $value);
        });

        //アルファベットのみ
        Validator::extend('alphabet', function($attribute, $value, $parameters, $validator){
            return preg_match('/^[A-Za-z]+$/u', $value);
        });

        //アルファベットに_-
        Validator::extend('alphabet_dash', function($attribute, $value, $parameters, $validator){
            return preg_match('/^[A-Za-z_-]+$/u', $value);
        });

        //アルファベットと数字
        validator::extend('alphabet_num', function($attribute, $value, $parameters, $validator){
            return preg_match('/^[A-Za-z0-9]+$/u', $value);
        });

        //アルファベットと数字に_-
        Validator::extend('alphabet_num_dash', function($attribute, $value, $parameters, $validator){
            return preg_match('/^[A-Za-z0-9_-]+$/u', $value);
        });

    }
}
