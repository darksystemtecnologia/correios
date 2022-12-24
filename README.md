# Modulo Correios 

[![Software License][ico-license]](LICENSE.md)
![ico-php-version]
![ico-packagist-version]
[![Total Downloads][ico-downloads]][link-downloads]


Uma maneira fácil de interagir com as principais funcionalidades dos [Correios](https://www.correios.com.br).

## Funcionalidades

- [Consultar CEP](#consultar-cep)
- [Consultar Preços e Prazos](#consultar-preços-e-prazos)

## Instalação

Via Composer

``` bash
$ composer require darksystemtecnologia/correios
```

## Uso

- ### Consultar CEP

Encontrar endereço pelo CEP consultando diretamente o [WebService][correios-sigep] dos Correios.

``` php
use DarkSystem\Correios\Client;

require 'vendor/autoload.php';

$correios = Client::CEP('75053290');

var_dump($correios);
```

#### Resultado:

```json
object(stdClass)#31 (6) {
  ["cep"]=>
  string(9) "75053-200"
  ["rua"]=>
  string(11) "Rua Daniela"
  ["complemento"]=>
  array(1) {
    [0]=>
    array(0) {
    }
  }
  ["bairro"]=>
  string(14) "Adriana Parque"
  ["cidade"]=>
  string(9) "Anápolis"
  ["uf"]=>
  string(2) "GO"
}
```

- ### Consultar Preços e Prazos

Calcular preços e prazos de serviços de entrega (Sedex, PAC e etc), com **suporte a multiplos objetos** na mesma consulta.

``` php
use DarkSystem\Correios\Client;
use DarkSystem\Correios\Service;

require 'vendor/autoload.php';

$correios = Cliente::FRETE();

$res = $correios->origin('39906306')
        ->destination('75053290')
        // aceita multiplos serviços
        ->services([Service::SEDEX, Service::PAC])
        // largura, altura, comprimento, 
        // peso e quantidade
        ->item(16, 16, 16, .3, 1) 
        ->item(16, 16, 16, .3, 3)
        ->item(16, 16, 16, .3, 2)
        ->calculate();
var_dump($res);
```

#### Resultado:

``` json
array(2) {
  [0]=>
  object(stdClass)#22 (4) {
    ["name"]=>
    string(5) "Sedex"
    ["code"]=>
    string(4) "4014"
    ["price"]=>
    float(316.3)
    ["deadline"]=>
    int(4)
  }
  [1]=>
  object(stdClass)#37 (4) {
    ["name"]=>
    string(3) "PAC"
    ["code"]=>
    string(4) "4510"
    ["price"]=>
    float(171.6)
    ["deadline"]=>
    int(8)
  }
}
```

## Licença

A Licença MIT (MIT). Consulte o [arquivo de licença](LICENSE) para obter mais informações.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-php-version]: https://img.shields.io/packagist/dependency-v/darksystemtecnologia/correios/php?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/darksystemtecnologia/correios?style=flat-square
[ico-packagist-version]: https://img.shields.io/packagist/v/darksystemtecnologia/correios?style=flat-square

[correios-sigep]: https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl
[link-downloads]: https://packagist.org/packages/darksystemtecnologia/correios
