<?php

namespace DarkSystem\Correios\Contracts;

interface CepInterface
{
    /**
     * Encontrar endereço por CEP.
     *
     * @param  string $zipcode
     *
     * @return array
     */
    public function find($zipcode);
}