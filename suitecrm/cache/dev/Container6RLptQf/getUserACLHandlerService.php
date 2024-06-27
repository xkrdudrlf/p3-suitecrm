<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserACLHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Process\LegacyHandler\ACL\UserACLHandler' shared autowired service.
     *
     * @return \App\Process\LegacyHandler\ACL\UserACLHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/LegacyHandler/ACL/UserACLHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/DefinitionEntryHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/BaseActionDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/BaseActionDefinitionProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/LegacyActionResolverInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/LegacyActionResolver.php';

        $container->privates['App\\Process\\LegacyHandler\\ACL\\UserACLHandler'] = $instance = new \App\Process\LegacyHandler\ACL\UserACLHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), new \App\Process\Service\BaseActionDefinitionProvider($container->parameters['module.base_actions'], ($container->privates['App\\Engine\\Service\\ActionAvailabilityChecker\\ActionAvailabilityChecker'] ?? $container->load('getActionAvailabilityCheckerService'))), new \App\Process\Service\LegacyActionResolver($container->parameters['legacy.action_resolver']), ($container->privates['App\\Engine\\LegacyHandler\\ActionNameMapperHandler'] ?? $container->getActionNameMapperHandlerService()), $container->parameters['system.admin_only_module_actions']);

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
