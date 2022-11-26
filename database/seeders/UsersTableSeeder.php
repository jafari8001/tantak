<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User\AuthToken;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                "first_name" => "مدیر",
                "last_name" => "سامانه",
                "username" => "09111111111",
                "id" => env('USER_ADMIN_ID'),
                "role" => env('ROLE_ADMIN_ID'),
            ],
        ];

        foreach ($items as $item) {
            $model = new \App\Models\User\User();
            $model->status = "active";
            $model->username = $item['username'];
            $model->last_name = $item['last_name'];
            $model->first_name = $item['first_name'];
            $model->created_by = env('USER_ADMIN_ID');
            $model->password = Hash::make('123456');
            if (isset($item['id'])) {
                $model->id = $item['id'];
            } else {
                $model->id = (string) Str::uuid();
            }
            $model->save();
            User::find($model->id)->roles()->sync($item['role']);
        }

        /*
        * create static token for scribe generator
        */
        $model = new AuthToken();
        $model->ip = '';
        $model->auth_token = env('SCRIBE_TOKEN');
        $model->created_by = env('USER_ADMIN_ID');
        $model->user_agent = '';
        $model->user_agent_client = '';
        $model->expired_token_at = '2100-01-01';
        $model->save();
    }
}
