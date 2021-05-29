<?php

namespace Bermuda\ServiceFactory;

/**
 * Class Factory
 * @package Bermuda\ServiceFactory
 */
class Factory implements FactoryInterface
{
    private \DI\FactoryInterface $delegate;

    public function __construct(\DI\FactoryInterface $delegate)
    {
        $this->delegate = $delegate;
    }

    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws FactoryException
     */
    public function __invoke(string $service, array $params = []): object
    {
        return $this->make($service, $params);
    }
    
    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws FactoryException
     */
    public function make(string $service, array $params = []): object
    {
        try 
        {
            $service = $this->delegate->make($service, $params);
        }
        
        catch (\Throwable $e)
        {
            FactoryException::fromPrevios($e)->throw();
        }

        return $service;
    }
}
