<?php

namespace ContainerKmQTBAR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrandVoterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.App\Security\Voter\BrandVoter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/CacheableVoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Voter/BrandVoter.php';

        return $container->privates['debug.security.voter.App\\Security\\Voter\\BrandVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \App\Security\Voter\BrandVoter(), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
