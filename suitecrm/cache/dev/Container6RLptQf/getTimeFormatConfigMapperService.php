<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTimeFormatConfigMapperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\SystemConfig\LegacyHandler\TimeFormatConfigMapper' shared autowired service.
     *
     * @return \App\SystemConfig\LegacyHandler\TimeFormatConfigMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/SystemConfig/LegacyHandler/SystemConfigMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/SystemConfig/LegacyHandler/TimeFormatConfigMapper.php';

        return $container->privates['App\\SystemConfig\\LegacyHandler\\TimeFormatConfigMapper'] = new \App\SystemConfig\LegacyHandler\TimeFormatConfigMapper(($container->privates['App\\DateTime\\LegacyHandler\\DateTimeHandler'] ?? $container->load('getDateTimeHandlerService')));
    }
}
