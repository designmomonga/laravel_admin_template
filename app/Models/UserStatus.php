<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;
    protected $table = 'user_statuses';

    /**
     * ユーザーの取得
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }

}
