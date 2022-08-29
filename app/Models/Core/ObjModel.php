<?php

namespace App\Models\Core;

class ObjModel
{
    function __construct($items)
    {
        foreach ($items as $key => $value) {
            $this->{$key} = $value;
        }
    }

    function __set($key, $val)
    {
        $this->{$key} = $val;
    }

    function __get($key)
    {
        return $this->{$key} ?? null;
    }

    function toArray()
    {
        dd($this);
    }
}
