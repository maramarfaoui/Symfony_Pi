<?php

namespace ContainerSzOK3ig;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dg4ThBGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dg4ThBG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dg4ThBG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commandpm' => ['privates', '.errored..service_locator.Dg4ThBG.App\\Entity\\Commandpm', NULL, 'Cannot autowire service ".service_locator.Dg4ThBG": it references class "App\\Entity\\Commandpm" but no such service exists.'],
        ], [
            'commandpm' => 'App\\Entity\\Commandpm',
        ]);
    }
}
