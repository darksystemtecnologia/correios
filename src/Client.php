<?php

namespace DarkSystem\Correios;

use DarkSystem\Correios\Services\CepService;
use DarkSystem\Correios\Services\FreteService;
use GuzzleHttp\Client as HttpClient;

class Client
{

    /**
     * Serviço de CEP dos Correios.
     *
     */
    public static function CEP($cep)
    {
        $response = new CepService(new HttpClient());
        return (object)$response->find($cep);
    }

    /**
     * Serviço de Frete dos Correios.
     */
    public static function FRETE()
    {
        return (object)new FreteService(new HttpClient());
    }
}
