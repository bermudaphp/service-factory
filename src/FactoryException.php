<?php


namespace Lobster;


/**
 * Class FactoryException
 * @package Lobster
 */
class FactoryException extends \RuntimeException
{
    /**
     * @param \Throwable $e
     * @return static
     */
    public static function fromPrevios(\Throwable $e) : self
    {
        return new static($e->getMessage(), $e->getCode(), $e);
    }
    
    /**
     * @throws static
     * @return void
     */
    public function throw() : void 
    {
        throw $this;
    }
}
