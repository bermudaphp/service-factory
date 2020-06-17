<?php


namespace Lobster;


use DI\FactoryInterface;


/**
 * Class Factory
 * @package Lobster
 */
class Factory implements Contracts\Factory
{
    private FactoryInterface $delegate;

    public function __construct(FactoryInterface $delegate)
    {
        $this->factory = $delegate;
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
            $service = $this->factory->make($service, $params);
        }
        catch (\Throwable $e)
        {
            FactoryException::fromPrevios($e)->throw();
        }

        return $service;
    }
}
