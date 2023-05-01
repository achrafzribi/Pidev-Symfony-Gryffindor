<?php

namespace ContainerXgjGAzv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NE6w_4_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nE6w.4.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nE6w.4.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'infotrafic' => ['privates', '.errored..service_locator.nE6w.4..App\\Entity\\Infotrafic', NULL, 'Cannot autowire service ".service_locator.nE6w.4.": it references class "App\\Entity\\Infotrafic" but no such service exists.'],
            'infotraficRepository' => ['privates', 'App\\Repository\\InfotraficRepository', 'getInfotraficRepositoryService', true],
        ], [
            'infotrafic' => 'App\\Entity\\Infotrafic',
            'infotraficRepository' => 'App\\Repository\\InfotraficRepository',
        ]);
    }
}
