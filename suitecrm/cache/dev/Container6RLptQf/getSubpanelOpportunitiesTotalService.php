<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubpanelOpportunitiesTotalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Module\Opportunities\Statistics\Subpanels\SubpanelOpportunitiesTotal' shared autowired service.
     *
     * @return \App\Module\Opportunities\Statistics\Subpanels\SubpanelOpportunitiesTotal
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Data/LegacyHandler/PresetDataHandlers/SubpanelDataQueryHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/Service/StatisticsProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/StatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).'/core/modules/Opportunities/Statistics/Subpanels/SubpanelOpportunitiesTotal.php';

        return $container->privates['App\\Module\\Opportunities\\Statistics\\Subpanels\\SubpanelOpportunitiesTotal'] = new \App\Module\Opportunities\Statistics\Subpanels\SubpanelOpportunitiesTotal(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->services['session'] ?? $container->getSessionService()));
    }
}
