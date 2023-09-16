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
            ["id" => "5246f14d-1906-4e34-a412-8fb689d20f23", "name" => "کاربران", "is_default" => false],
            ["id" => "791d1b02-3610-4177-9051-eb7ae6b72def", "name" => "مدیر سایت", "is_default" => false],
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
