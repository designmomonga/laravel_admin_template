<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'システム管理者',
        ]);
        Role::create([
            'role_name' => '管理者',
        ]);
        Role::create([
            'role_name' => '一般',
        ]);
    }
}