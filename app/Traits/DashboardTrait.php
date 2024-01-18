<?php

namespace App\Traits;

use GuzzleHttp\Psr7\Uri;

trait DashboardTrait
{
    public static function getUrl()
    {
        //retorna os dados passados na url para acompanhamento
        $url = app()->url->getRequest()->query;
        return $url;
    }

}
