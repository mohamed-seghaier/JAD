<?php

namespace ContainerX9thcCN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrdersRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\OrdersRepository' shared autowired service.
     *
     * @return \App\Repository\OrdersRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/OrdersRepository.php';

        return $container->privates['App\\Repository\\OrdersRepository'] = new \App\Repository\OrdersRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
