<?php

namespace ContainerC731nta;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fq9PTeAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Fq9PTeA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fq9PTeA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'historiquevente' => ['privates', '.errored..service_locator.Fq9PTeA.App\\Entity\\Historiquevente', NULL, 'Cannot autowire service ".service_locator.Fq9PTeA": it references class "App\\Entity\\Historiquevente" but no such service exists.'],
        ], [
            'historiquevente' => 'App\\Entity\\Historiquevente',
        ]);
    }
}
