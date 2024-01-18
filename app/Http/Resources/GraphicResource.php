<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class GraphicResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static function postJs()
    {
        return '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';
    }
}
