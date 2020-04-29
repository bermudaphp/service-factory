<?php


namespace Lobster\Factory;


use DI\FactoryInterface;
use Lobster\Factory\Contracts\FactoryException;


/**
 * Class Factory
 * @package Lobster\Factory
 */
class Factory implements Contracts\Factory
{
    private FactoryInterface $factory;

    /**
     * Factory constructor.
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws \Lobster\Factory\FactoryException
     */
    public function __invoke(string $service, array $params = []): object
    {
        try {
            $service = $this->factory->make($service, $params);
        }
        catch (\Throwable $e)
        {
            throw FactoryException::fromPrev($e);
        }

        return $service;
    }
}
