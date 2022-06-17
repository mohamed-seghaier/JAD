<?php

namespace ContainerE2Iw4ok;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_ConfigDumpReference_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.config_dump_reference.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.config_dump_reference.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('config:dump-reference', [], 'Dump the default configuration for an extension', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand {
            return ($container->privates['console.command.config_dump_reference'] ?? $container->load('getConsole_Command_ConfigDumpReferenceService'));
        });
    }
}
