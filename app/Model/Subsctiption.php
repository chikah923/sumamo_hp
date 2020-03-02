<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Subscription extends Model
{
    protected $guarded = [];

    public static function createSubsctiption($inputs, $flow)
    {
        return self::create([
            'last_name' => $inputs['last_name'],
            'first_name' => $inputs['first_name'],
            'email' => $inputs['email'],
            'phone' => $inputs['phone'],
            'flow' => $flow,
        ]);
    }
}