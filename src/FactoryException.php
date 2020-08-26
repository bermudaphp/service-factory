<?php


namespace Bermuda\ServiceFactory;


/**
 * Class FactoryException
 * @package Bermuda\ServiceFactory
 */
class FactoryException extends \RuntimeException
{
    /**
     * @param \Throwable $e
     * @return static
     */
    public static function fromPrevious(\Throwable $e): self
    {
        $self = new static($e->getMessage(), $e->getCode(), $e);
        
        $self->file = $e->getFile();
        $self->line = $e->getLine();
        
        return $self;
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
