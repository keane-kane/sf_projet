<?php

namespace ContainerX8wVscM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IPOOhYLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iPOOhYL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iPOOhYL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chambreRepository' => ['privates', 'App\\Repository\\ChambreRepository', 'getChambreRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'chambreRepository' => 'App\\Repository\\ChambreRepository',
            'paginator' => '?',
        ]);
    }
}
