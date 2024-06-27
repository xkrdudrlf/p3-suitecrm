<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordItemResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Data\Resolver\RecordItemResolver' shared autowired service.
     *
     * @return \App\Data\Resolver\RecordItemResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/GraphQl/Resolver/QueryItemResolverInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Resolver/RecordItemResolver.php';

        return $container->privates['App\\Data\\Resolver\\RecordItemResolver'] = new \App\Data\Resolver\RecordItemResolver(($container->privates['App\\Data\\LegacyHandler\\RecordHandler'] ?? $container->load('getRecordHandlerService')));
    }
}
