<?php


namespace Lobster\Factory\Contracts;


/**
 * Interface Factory
 * @package Lobster\Factory
 */
interface Factory
{
    /**
     * @param string $service
     * @param array $params
     * @return object
     * @throws FactoryException
     */
    public function __invoke(string $service, array $params = []) : object ;
}
