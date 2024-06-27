<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShivasVersioning_Command_StatusService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'shivas_versioning.command.status' shared service.
     *
     * @return \Shivas\VersioningBundle\Command\StatusCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 3).'/vendor/shivas/versioning-bundle/src/Command/StatusCommand.php';

        $container->privates['shivas_versioning.command.status'] = $instance = new \Shivas\VersioningBundle\Command\StatusCommand(($container->privates['shivas_versioning.manager'] ?? $container->getShivasVersioning_ManagerService()));

        $instance->setName('app:version:status');

        return $instance;
    }
}