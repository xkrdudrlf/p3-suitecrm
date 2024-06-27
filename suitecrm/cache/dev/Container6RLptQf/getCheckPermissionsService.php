<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckPermissionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Install\Service\Upgrade\Steps\CheckPermissions' autowired service.
     *
     * @return \App\Install\Service\Upgrade\Steps\CheckPermissions
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Upgrade/UpgradeStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Upgrade/Steps/CheckPermissions.php';

        $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\CheckPermissions'] = function () use ($container) {
            return new \App\Install\Service\Upgrade\Steps\CheckPermissions(($container->privates['App\\Install\\Service\\Upgrade\\UpgradePackageHandler'] ?? $container->load('getUpgradePackageHandlerService')));
        };

        return $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\CheckPermissions']();
    }
}
