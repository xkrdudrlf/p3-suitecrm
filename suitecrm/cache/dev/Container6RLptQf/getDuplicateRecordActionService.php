<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDuplicateRecordActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Process\Service\RecordActions\DuplicateRecordAction' shared autowired service.
     *
     * @return \App\Process\Service\RecordActions\DuplicateRecordAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/RecordActions/DuplicateRecordAction.php';

        return $container->privates['App\\Process\\Service\\RecordActions\\DuplicateRecordAction'] = new \App\Process\Service\RecordActions\DuplicateRecordAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()));
    }
}
