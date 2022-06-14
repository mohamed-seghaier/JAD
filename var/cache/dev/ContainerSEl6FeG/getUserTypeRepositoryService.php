<?php

namespace ContainerSEl6FeG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTypeRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\UserTypeRepository' shared autowired service.
     *
     * @return \App\Repository\UserTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/UserTypeRepository.php';

        return $container->privates['App\\Repository\\UserTypeRepository'] = new \App\Repository\UserTypeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
