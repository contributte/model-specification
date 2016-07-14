# Model Specification

Simple tools for configuring your model flow.

-----

[![Build Status](https://img.shields.io/travis/minetro/model-specification.svg?style=flat-square)](https://travis-ci.org/minetro/model-specification)
[![Downloads total](https://img.shields.io/packagist/dt/minetro/model-specification.svg?style=flat-square)](https://packagist.org/packages/minetro/model-specification)
[![Latest stable](https://img.shields.io/packagist/v/minetro/model-specification.svg?style=flat-square)](https://packagist.org/packages/minetro/model-specification)
[![HHVM Status](https://img.shields.io/hhvm/minetro/model-specification.svg?style=flat-square)](http://hhvm.h4cc.de/package/minetro/model-specification)

## Discussion / Help

[![Join the chat](https://img.shields.io/gitter/room/minetro/nette.svg?style=flat-square)](https://gitter.im/minetro/nette?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Install

```sh
$ composer require minetro/model-specification
```

## Usage

```php
use Minetro\Model\Specification\Criteria\Criteria;
use Minetro\Model\Specification\Pagination\Paginator;
use Minetro\Model\Specification\Sorter\Sorter;
use Minetro\Model\Specification\Specification;

$spec = new Specification();

$spec->setCriteria(Criteria::factory(['foo' => 'bar']));
$spec->setSorter(Sorter::factory(['foo' => 'ASC']));
$spec->setPaginator(Paginator::factory(15));
```

```php
$this->facade->match($spec);
```
