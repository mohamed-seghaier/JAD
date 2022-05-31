<?php

namespace ContainerKmQTBAR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OQjFjmOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oQjFjmO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oQjFjmO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'brandRepository' => ['privates', 'App\\Repository\\BrandRepository', 'getBrandRepositoryService', false],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'brandRepository' => 'App\\Repository\\BrandRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
