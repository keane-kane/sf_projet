<?php

namespace ContainerX8wVscM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0D9EsMKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0D9EsMK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0D9EsMK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'batiment' => ['privates', '.errored..service_locator.0D9EsMK.App\\Entity\\Batiment', NULL, 'Cannot autowire service ".service_locator.0D9EsMK": it references class "App\\Entity\\Batiment" but no such service exists.'],
        ], [
            'batiment' => 'App\\Entity\\Batiment',
        ]);
    }
}
