<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateLeadNameButtonMapperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\ViewDefinitions\LegacyHandler\Subpanel\CreateLeadNameButtonMapper' shared autowired service.
     *
     * @return \App\ViewDefinitions\LegacyHandler\Subpanel\CreateLeadNameButtonMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/ModuleAwareRegistryItemInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/SubpanelButtonMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/Subpanel/CreateButtonMapper.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/Subpanel/CreateLeadNameButtonMapper.php';

        return $container->privates['App\\ViewDefinitions\\LegacyHandler\\Subpanel\\CreateLeadNameButtonMapper'] = new \App\ViewDefinitions\LegacyHandler\Subpanel\CreateLeadNameButtonMapper(($container->privates['App\\FieldDefinitions\\LegacyHandler\\FieldDefinitionsHandler'] ?? $container->load('getFieldDefinitionsHandlerService')));
    }
}
