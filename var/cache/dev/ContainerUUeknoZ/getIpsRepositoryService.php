<?php

namespace ContainerUUeknoZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIpsRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\IpsRepository' shared autowired service.
     *
     * @return \App\Repository\IpsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/IpsRepository.php';

        return $container->privates['App\\Repository\\IpsRepository'] = new \App\Repository\IpsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
