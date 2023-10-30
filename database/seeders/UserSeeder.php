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
            'last_name' => 'System',
            'first_name' => 'Master',
            'last_name_kana' => 'しすてむ',
            'first_name_kana' => 'ますたー',
            'email' => 'master@design-momonga.jp',
            'password' => 'password',
            'role_id' => '1',
            'user_status_id' => '1',
        ]);
        User::create([
            'last_name' => 'Taylor',
            'first_name' => 'Otwell',
            'last_name_kana' => 'ていらー',
            'first_name_kana' => 'おっとうぇる',
            'email' => 'admin@design-momonga.jp',
            'password' => 'password',
            'role_id' => '2',
            'user_status_id' => '1',
        ]);
        User::create([
            'last_name' => 'Rasmus',
            'first_name' => 'Lerdorf',
            'last_name_kana' => 'らすます',
            'first_name_kana' => 'らーどふ',
            'email' => 'user@design-momonga.jp',
            'password' => 'password',
            'role_id' => '3',
            'user_status_id' => '2',
        ]);
      
    }
}
