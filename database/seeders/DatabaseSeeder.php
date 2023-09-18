<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SettingSeeder::class,
            FakeDataSeeder::class,
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            ActionsTableSeeder::class,
            RoleActionTableSeeder::class,
        ]);
    }
}
