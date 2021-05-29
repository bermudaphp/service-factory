<?php

namespace Bermuda\ServiceFactory;

/**
 * Interface Factory
 * @package Bermuda\ServiceFactory
 */
interface FactoryInterface
{
    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws FactoryException
     */
    public function make(string $service, array $params = []): object ;
    
    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws FactoryException
     */
    public function __invoke(string $service, array $params = []): object ;
}
