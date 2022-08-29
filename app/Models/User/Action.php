<?php

namespace App\Models\User;

use App\Models\BaseModel;

class Action extends BaseModel
{
    protected $fillable = ['name', 'alias', 'parent_id'];

    public static function insert($item)
    {
        $action = new Action();
        $action->sort = $item['sort'];
        $action->name = $item['name'];
        $action->type = $item['type'];
        $action->alias = $item['alias'];
        $action->parent = $item['parent'];
        $action->is_menu = $item['is_menu'];
        $action->created_by = $item['created_by'];
        if (isset($item['icon'])) {
            $action->icon = $item['icon'];
        }
        $action->save();
        return $action->id;
    }

    public static function permission($action)
    {
        if (!auth()->check()) {
            return false;
        }
        $chek_action = Action::select('actions.id')
            ->join('action_role', 'action_role.action_id', '=', 'actions.id')
            ->join('role_user', 'role_user.role_id', '=', 'action_role.role_id')
            ->where([
                ['role_user.user_id', '=', auth()->user()->id],
                ['actions.alias', '=', $action]
            ])
            ->first();
        return isset($chek_action->id);
    }
}
