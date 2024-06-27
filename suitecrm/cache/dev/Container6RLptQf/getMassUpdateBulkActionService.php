<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassUpdateBulkActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Process\Service\BulkActions\MassUpdateBulkAction' shared autowired service.
     *
     * @return \App\Process\Service\BulkActions\MassUpdateBulkAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/BulkActions/MassUpdateBulkAction.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/RecordMassUpdateServiceInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/MassUpdateHandler.php';

        $a = ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService());
        $b = new \App\Data\LegacyHandler\MassUpdateHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), $a, ($container->privates['App\\Data\\LegacyHandler\\RecordListHandler'] ?? $container->load('getRecordListHandlerService')), ($container->services['session'] ?? $container->getSessionService()));

        $c = ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService());

        $b->setLogger($c);

        $container->privates['App\\Process\\Service\\BulkActions\\MassUpdateBulkAction'] = $instance = new \App\Process\Service\BulkActions\MassUpdateBulkAction($a, $b);

        $instance->setLogger($c);

        return $instance;
    }
}
