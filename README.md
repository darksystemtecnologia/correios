# Modulo Correios 

[![Software License][ico-license]](LICENSE.md)
![ico-php-version]
![ico-packagist-version]
[![Total Downloads][ico-downloads]][link-downloads]


Uma maneira fácil de interagir com as principais funcionalidades dos [Correios](https://www.correios.com.br).

## Funcionalidades

- [Consultar CEP](#consultar-cep)

## Instalação

Via Composer

``` bash
$ composer require darksystem/busca-cep
```

## Uso

### Consultar CEP

Encontrar endereço pelo CEP consultando diretamente o [WebService][correios-sigep] dos Correios.

``` php
use DarkSystem\Correios\Client;

require 'vendor/autoload.php';

$correios = Client::CEP('75053290');

var_dump($correios);

/*

Resultado:

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
*/
```

<!-- ## Change log -->

<!-- Consulte [CHANGELOG](.github/CHANGELOG.md) para obter mais informações sobre o que mudou recentemente. -->

## Testando

``` bash
$ composer test
```

## Licença

A Licença MIT (MIT). Consulte o [arquivo de licença](LICENSE) para obter mais informações.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-php-version]: https://img.shields.io/packagist/dependency-v/darksystemtecnologia/correios/php?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/darksystemtecnologia/correios?style=flat-square
[ico-packagist-version]: https://img.shields.io/packagist/v/darksystemtecnologia/correios?style=flat-square

[correios-sigep]: https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl
[link-downloads]: https://packagist.org/packages/darksystemtecnologia/correios