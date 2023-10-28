<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * ロールを所有しているユーザーの取得
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
