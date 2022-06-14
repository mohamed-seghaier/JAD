<?php

namespace ContainerUUeknoZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchasesListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Purchase\PurchasesListController' shared autowired service.
     *
     * @return \App\Controller\Purchase\PurchasesListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Purchase/PurchasesListController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';

        $container->services['App\\Controller\\Purchase\\PurchasesListController'] = $instance = new \App\Controller\Purchase\PurchasesListController(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Purchase\\PurchasesListController', $container));

        return $instance;
    }
}
