<?php

namespace Database\Seeders;

use App\Models\User\Action;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TempActionsRolesSeeder extends Seeder
{
    public $sort = 1;
    public function run()
    {
        $parent = [
            "alias" => "exception_log/index",
            "name" => "لاگ خطا ها",
        ];
        $childs = [
            [
                "alias" => "exception_log/insert",
                "name" => 'ثبت',
            ],
            [
                "alias" => "exception_log/update",
                "name" => 'ویرایش',
            ],
            [
                "alias" => "exception_log/delete",
                "name" => 'حذف',
            ],
            [
                "alias" => "exception_log/root",
                "name" => 'دسترسی سطح بالا',
            ]
        ];
        $this->save($parent, $childs);
    }

    private function save($parent, $childs = [])
    {
        $parent["fa_id"] = new Action();
        $parent["fa_id"]->type = 'web';
        $parent["fa_id"]->parent = null;
        $parent["fa_id"]->is_menu = '1';
        $parent["fa_id"]->icon = 'menu';
        $parent["fa_id"]->sort = $this->sort;
        $parent["fa_id"]->name = $parent["name"];
        $parent["fa_id"]->alias = $parent["alias"];
        $parent["fa_id"]->created_by = env('USER_ADMIN_ID');
        $parent["fa_id"]->save();

        DB::table('action_role')
            ->insert([
                'action_id' => $parent["fa_id"]->id,
                'id' => (string) Str::uuid(),
                'role_id' => env("ROLE_ADMIN_ID"),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        $this->sort += 1;

        foreach ($childs as $item) {
            $action = new Action();
            $action->sort = -1;
            $action->type = 'web';
            $action->is_menu = '0';
            $action->name = $item["name"];
            $action->alias = $item["alias"];
            $action->parent = $parent["fa_id"]->id;
            $action->created_by = env('USER_ADMIN_ID');
            $action->save();

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
