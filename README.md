# PSR-6 to PSR-16 adapter

The package contains an adapter which decorates a [PSR-6](https://www.php-fig.org/psr/psr-6/) pool implementation 
and converts it to a PSR-16 simple cache interface.

Adapter enables to avoid code duplication during development of a PSR-6 and PSR-16 compatible caching library. 
It's enough to develop a single PSR-6 implementation and then adapt it using the presented adapter.

The adapter is tested with a [package](https://github.com/parshikovpavel/array-cache) to cache data in memory using a PHP array.

# Installation

The recommended method of installing is via Composer.

Run the following command from the project root:

```bash
composer require parshikovpavel/psr-cache-adapter
```

# Usage

A detailed description of the interfaces implemented in the library can be found in [PSR-6](https://www.php-fig.org/psr/psr-6/) and [PSR-16](https://www.php-fig.org/psr/psr-16/).

Just make an injection a created PSR-6 pool class in an adapter constructor as below:

```php
use ppCache\Psr6ToPsr16Adapter;

/* Creating an instance of some PSR-6 pool  */

/** @var \Psr\Cache\CacheItemPoolInterface $psr6 */
$psr6 = new SomeCacheItemPool();

/* Adapting it to the PSR-16 simple cache interface */
$psr16 = new Psr6ToPsr16Adapter($psr6);
```