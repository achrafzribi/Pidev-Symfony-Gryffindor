<?php

namespace Container40zCYeY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ef8xEl6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ef8xEl6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ef8xEl6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chauffeur' => ['privates', '.errored..service_locator.Ef8xEl6.App\\Entity\\Chauffeur', NULL, 'Cannot autowire service ".service_locator.Ef8xEl6": it references class "App\\Entity\\Chauffeur" but no such service exists.'],
        ], [
            'chauffeur' => 'App\\Entity\\Chauffeur',
        ]);
    }
}
