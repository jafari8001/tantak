<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ["id" => env('ROLE_USER_ID'), "name" => "کاربران", "is_default" => false],
            ["id" => env('ROLE_ADMIN_ID'), "name" => "مدیر سایت", "is_default" => false],
        ];
        
        foreach ($roles as $role) {
            DB::table('roles')
                ->insert([
                    'id' => isset($role['id']) ? $role['id'] : (string) Str::uuid(),
                    'name' => $role['name'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'is_default' => $role['is_default'],
                    'created_by' => isset($role['id']) ? $role['id'] : (string) Str::uuid()
                ]);
        }
    }
}
