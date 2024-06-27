<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSnoozeAlertTimerPreferenceMapperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\UserPreferences\LegacyHandler\Mappers\SnoozeAlertTimerPreferenceMapper' shared autowired service.
     *
     * @return \App\UserPreferences\LegacyHandler\Mappers\SnoozeAlertTimerPreferenceMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/UserPreferencesMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/UserPreferences/LegacyHandler/Mappers/SnoozeAlertTimerPreferenceMapper.php';

        return $container->privates['App\\UserPreferences\\LegacyHandler\\Mappers\\SnoozeAlertTimerPreferenceMapper'] = new \App\UserPreferences\LegacyHandler\Mappers\SnoozeAlertTimerPreferenceMapper(($container->services['app.system-configs'] ?? $container->getApp_SystemconfigsService()));
    }
}
