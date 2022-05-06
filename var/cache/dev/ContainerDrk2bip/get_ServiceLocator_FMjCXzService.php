<?php

namespace ContainerDrk2bip;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FMjCXzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._fMjCXz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._fMjCXz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'brandRepository' => ['privates', 'App\\Repository\\BrandRepository', 'getBrandRepositoryService', false],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'brandRepository' => 'App\\Repository\\BrandRepository',
            'manager' => '?',
        ]);
    }
}
