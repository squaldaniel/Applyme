<?php

namespace App\Traits;

trait UserTrait
{
    public static function clean($user, array $fields)
    {
        $fields = ['email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];
        foreach ($fields as $key => $clean){
            unset($user->{$clean});
        }
        return $user;
    }
}
