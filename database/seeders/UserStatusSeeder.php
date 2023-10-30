<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserStatus;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserStatus::create([
            'status_name' => '有効',
        ]);
        UserStatus::create([
            'status_name' => '無効',
        ]);
    }
}
