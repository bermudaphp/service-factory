<?php


namespace Lobster\Contracts;


/**
 * Interface Factory
 * @package Lobster
 */
interface Factory
{
    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws Lobster\FactoryException
     */
    public function make(string $service, array $params = []): object ;
    
    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws Lobster\FactoryException
     */
    public function __invoke(string $service, array $params = []): object ;
}
