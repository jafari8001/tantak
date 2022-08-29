<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\User\Action;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleActionTableSeeder extends Seeder
{
    public function run()
    {
        $exclude = [];

        $actions = Action::whereNotIn('alias', $exclude)->get();
        foreach ($actions as $action) {
            DB::table('action_role')
                ->insert([
                    'action_id' => $action->id,
                    'id' => (string) Str::uuid(),
                    'role_id' => env("ROLE_ADMIN_ID"),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
        }
    }
}
