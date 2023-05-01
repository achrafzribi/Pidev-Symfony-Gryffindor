<?php

namespace ContainerRow2EjM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZGydyVQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zGydyVQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zGydyVQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'infotraficRepository' => ['privates', 'App\\Repository\\InfotraficRepository', 'getInfotraficRepositoryService', true],
        ], [
            'infotraficRepository' => 'App\\Repository\\InfotraficRepository',
        ]);
    }
}
