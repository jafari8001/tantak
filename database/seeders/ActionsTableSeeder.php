<?php

namespace Database\Seeders;

use App\Models\User\Action;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActionsTableSeeder extends Seeder
{
    public $sort = 1;
    public function run()
    {
        $this->user();
        $this->role();
        $this->upload();
        $this->exception_log();
        $this->request_log();
        $this->settings();
    }

    private function request_log()
    {
        $parent = [
            "alias" => "request_log/index",
            "name" => "لاگ درخواست ها",
        ];
        $childs = [
            [
                "alias" => "request_log/insert",
                "name" => 'ثبت',
            ],
            [
                "alias" => "request_log/update",
                "name" => 'ویرایش',
            ],
            [
                "alias" => "request_log/delete",
                "name" => 'حذف',
            ],
            [
                "alias" => "request_log/root",
                "name" => 'دسترسی سطح بالا',
            ]
        ];
        $this->save($parent, $childs);
    }

    private function exception_log()
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
    
    private function settings()
    {
        $parent = [
            "alias" => "settings/index",
            "name" => "تنظیمات",
        ];
        $childs = [
            [
                "alias" => "settings/insert",
                "name" => 'ثبت',
            ],
            [
                "alias" => "settings/update",
                "name" => 'ویرایش',
            ],
            [
                "alias" => "settings/delete",
                "name" => 'حذف',
            ],
            [
                "alias" => "settings/root",
                "name" => 'دسترسی سطح بالا',
            ]
        ];
        $this->save($parent, $childs);
    }

    private function upload()
    {
        $parent = [
            "alias" => "upload/index",
            "name" => "آپلود",
        ];
        $childs = [
            [
                "alias" => "upload/insert",
                "name" => 'ثبت',
            ],
            [
                "alias" => "upload/update",
                "name" => 'ویرایش',
            ],
            [
                "alias" => "upload/delete",
                "name" => 'حذف',
            ],
            [
                "alias" => "upload/root",
                "name" => 'دسترسی سطح بالا',
            ]
        ];
        $this->save($parent, $childs);
    }

    private function role()
    {
        $parent = [
            "alias" => "role/index",
            "name" => "سطح دسترسی",
        ];
        $childs = [
            [
                "alias" => "role/insert",
                "name" => 'ثبت',
            ],
            [
                "alias" => "role/update",
                "name" => 'ویرایش',
            ],
            [
                "alias" => "role/delete",
                "name" => 'حذف',
            ],
            [
                "alias" => "role/assign",
                "name" => 'تخصیص فعالیت',
            ],
            [
                "alias" => "role/root",
                "name" => 'دسترسی سطح بالا',
            ]
        ];
        $this->save($parent, $childs);
    }

    private function user()
    {
        $parent = [
            "alias" => "user/index",
            "name" => "کاربران",
        ];
        $childs = [
            [
                "alias" => "user/insert",
                "name" => 'ثبت',
            ],
            [
                "alias" => "user/update",
                "name" => 'ویرایش',
            ],
            [
                "alias" => "user/delete",
                "name" => 'حذف',
            ],
            [
                "alias" => "user/root",
                "name" => 'دسترسی سطح بالا',
            ],
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
        }
    }
}
