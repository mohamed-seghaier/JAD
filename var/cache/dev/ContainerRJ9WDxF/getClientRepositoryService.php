<?php

namespace ContainerRJ9WDxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ClientRepository' shared autowired service.
     *
     * @return \App\Repository\ClientRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/ClientRepository.php';

        return $container->privates['App\\Repository\\ClientRepository'] = new \App\Repository\ClientRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}