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
            $role_action_exists = DB::table('action_role')
                ->where('action_id' , $action->id)
                ->where('role_id' , "791d1b02-3610-4177-9051-eb7ae6b72def")
                ->exists();

            if(!$role_action_exists){
                DB::table('action_role')
                    ->insert([
                        'action_id' => $action->id,
                        'id' => (string) Str::uuid(),
                        'role_id' => "791d1b02-3610-4177-9051-eb7ae6b72def",
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
            }
        }
    }
}
