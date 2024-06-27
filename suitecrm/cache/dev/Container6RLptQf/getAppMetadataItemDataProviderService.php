<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppMetadataItemDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Metadata\DataProvider\AppMetadataItemDataProvider' shared autowired service.
     *
     * @return \App\Metadata\DataProvider\AppMetadataItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Metadata/DataProvider/AppMetadataItemDataProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Metadata/Service/AppMetadataProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Metadata/Service/AppMetadataProvider.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/AdminPanelDefinitionProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/FieldDefinitionsInjectorTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/AdminPanelDefinitionHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/CacheManagerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/LegacyHandler/CacheManagerHandler.php';

        $a = ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService());
        $b = ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState()));
        $c = ($container->services['session'] ?? $container->getSessionService());
        $d = ($container->services['cache.app'] ?? $container->getCache_AppService());

        return $container->privates['App\\Metadata\\DataProvider\\AppMetadataItemDataProvider'] = new \App\Metadata\DataProvider\AppMetadataItemDataProvider(new \App\Metadata\Service\AppMetadataProvider($a, ($container->services['app.system-configs'] ?? $container->getApp_SystemconfigsService()), ($container->privates['App\\UserPreferences\\LegacyHandler\\UserPreferenceHandler'] ?? $container->getUserPreferenceHandlerService()), ($container->privates['App\\Navbar\\LegacyHandler\\NavbarHandler'] ?? $container->getNavbarHandlerService()), ($container->privates['App\\Languages\\LegacyHandler\\AppStringsHandler'] ?? $container->load('getAppStringsHandlerService')), ($container->privates['App\\Languages\\LegacyHandler\\AppListStringsHandler'] ?? $container->load('getAppListStringsHandlerService')), ($container->privates['App\\Languages\\LegacyHandler\\ModStringsHandler'] ?? $container->load('getModStringsHandlerService')), ($container->privates['App\\Themes\\Service\\ThemeImageService'] ?? $container->load('getThemeImageServiceService')), ($container->privates['App\\Metadata\\Service\\ModuleMetadataProvider'] ?? $container->load('getModuleMetadataProviderService')), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['App\\Authentication\\LegacyHandler\\UserHandler'] ?? $container->getUserHandlerService()), new \App\ViewDefinitions\LegacyHandler\AdminPanelDefinitionHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', $b, $a, $c, ($container->privates['App\\Routes\\LegacyHandler\\RouteConverterHandler'] ?? $container->getRouteConverterHandlerService())), $d, new \App\Engine\LegacyHandler\CacheManagerHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', $b, $c, $d, $d), ($container->privates['App\\Install\\LegacyHandler\\InstallHandler'] ?? $container->getInstallHandlerService()), ($container->privates['App\\Module\\LegacyHandler\\RecentlyViewed\\RecentlyViewedHandler'] ?? $container->load('getRecentlyViewedHandlerService'))));
    }
}
