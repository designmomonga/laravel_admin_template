<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'System Master',
            'email' => 'system.master@design-momonga.jp',
            'password' => 'password',
            'role_id' => '1',
        ]);
        User::create([
            'name' => '管理者',
            'email' => 'admin@design-momonga.jp',
            'password' => 'password',
            'role_id' => '2',
        ]);
        User::create([
            'name' => '一般',
            'email' => 'user@design-momonga.jp',
            'password' => 'password',
            'role_id' => '3',
        ]);
    }
}
