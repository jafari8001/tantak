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
                "phone_number" => "09933861217",
                "national_code" => "0880348119",
                "person_type" => "real",
                "status" => "active",
                "id" => env('USER_ADMIN_ID'),
                "role" => env('ROLE_ADMIN_ID'),
            ]
        ];

        foreach ($items as $item) {
            $model = new User();
            $model->status = $item['status'];
            $model->username = $item['username'];
            $model->last_name = $item['last_name'];
            $model->first_name = $item['first_name'];
            $model->person_type = $item['person_type'];
            $model->password = Hash::make('123456');
            $model->phone_number = $item['phone_number'];
            $model->national_code = $item['national_code'];
            $model->created_by = env('USER_ADMIN_ID');
        
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
        $model->auth_token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi";
        $model->created_by = "56194f1c-1398-44f0-87cd-c34d2356eeaf";
        $model->user_agent = '';
        $model->user_agent_client = '';
        $model->expired_token_at = '2100-01-01';
        $model->save();
    }
}
