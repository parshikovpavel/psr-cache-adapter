<?php

namespace ppCache;

use Exception;

/**
 * @inheritDoc
 */
final class InvalidArgumentException extends Exception implements
    \Psr\Cache\InvalidArgumentException,
    \Psr\SimpleCache\InvalidArgumentException
{
    /* ... */
}
