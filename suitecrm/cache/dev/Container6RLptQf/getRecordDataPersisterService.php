<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Process\DataPersister\RecordDataPersister' shared autowired service.
     *
     * @return \App\Process\DataPersister\RecordDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/DataPersister/RecordDataPersister.php';

        return $container->privates['App\\Process\\DataPersister\\RecordDataPersister'] = new \App\Process\DataPersister\RecordDataPersister(($container->privates['App\\Data\\LegacyHandler\\RecordHandler'] ?? $container->load('getRecordHandlerService')));
    }
}
