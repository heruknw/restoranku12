<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $roles = [
            ['role_name' => 'admin', 'description' => 'Administrator'],
            ['name' => 'cashier', 'description' => 'Kasir'],
            ['name' => 'chef', 'description' => 'Koki'],
            ['name' => 'customer', 'description' => 'Pelanggan'],
        ];
        DB::table('roles')->insert($roles);
    }
} 
