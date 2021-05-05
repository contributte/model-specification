![](https://heatbadger.now.sh/github/readme/contributte/model-specification/?deprecated=1)

<p align=center>
    <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
    <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
    <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
    Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained. Please use [contributte/utils](https://github.com/contributte/utils).
|---|---|

| Composer | [`minetro/model-specification`](https://packagist.org/minetro/model-specification) |
|---| --- |
| Version | ![](https://badgen.net/packagist/v/minetro/model-specification) |
| PHP | ![](https://badgen.net/packagist/php/minetro/model-specification) |
| License | ![](https://badgen.net/github/license/minetro/model-specification) |

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
$spec = Specification::factory(
    Criteria::factory(['foo' => 'bar']),
    Sorter::factory(['foo' => 'ASC']),
    Paginator::factory(15)
);
```

```php
$this->facade->match($spec);
```


## Development

This package was maintain by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for being used this package.
