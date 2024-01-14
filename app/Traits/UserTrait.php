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
        if ($parts <= 0) {
            return ["Número inválido de partes"];
        }
        // Calcula o tamanho aproximado de cada parte
        $tamanhoParte = ceil(strlen($text) / $parts);
        // Divide o texto em partes aproximadamente iguais
        $splits = str_split($text, $tamanhoParte);
        // Retorna as partes
        return $splits;
    }
}
