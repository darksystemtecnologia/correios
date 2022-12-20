<?php

namespace DarkSystem\Correios;

use DarkSystem\Correios\Services\CepService;
use GuzzleHttp\Client as HttpClient;

class Client
{
    public static function CEP($cep)
    {
        $response = new CepService(new HttpClient());
        return (object)$response->find($cep);
    }
}
