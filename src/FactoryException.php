<?php


namespace Lobster\Factory;


/**
 * Class Exception
 * @package Lobster\Factory
 */
class FactoryException extends \RuntimeException implements Contracts\FactoryException
{
    /**
     * @param \Throwable $e
     * @return static
     */
    public static function fromPrev(\Throwable $e) : self
    {
        return new static($e->getMessage(), $e->getCode(), $e);
    }
}
