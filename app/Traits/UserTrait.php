<?php

namespace App\Traits;

trait UserTrait
{
    public static function clean($user, array $fields)
    {
        foreach ($fields as $key => $clean){
            unset($user->{$clean});
        }
        return $user;
    }
    public static function addAttribute($user, array $fields)
    {
        foreach($fields as $key => $value){
            $user->{$key} = $value;
        }
        return $user;
    }
    public static function splitText($text, $parts)
    {
        $words = explode(' ', $text);$quant = (int) round(count($words) / $parts);$textParts = array_chunk($words, $quant);$cols = [];foreach ($textParts as $key => $columns){array_push($cols, implode(' ', $columns));}return $cols;
    }
}
