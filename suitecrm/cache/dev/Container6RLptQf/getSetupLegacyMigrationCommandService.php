<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSetupLegacyMigrationCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Install\Command\SetupLegacyMigrationCommand' shared autowired service.
     *
     * @return \App\Install\Command\SetupLegacyMigrationCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Command/BaseStepExecutorCommand.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Command/SetupLegacyMigrationCommand.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/ProcessSteps/ProcessStepExecutorInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/ProcessSteps/ProcessStepExecutor.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/LegacyMigration/LegacyMigrationHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/LegacyMigration/LegacyMigrationHandler.php';

        $container->privates['App\\Install\\Command\\SetupLegacyMigrationCommand'] = $instance = new \App\Install\Command\SetupLegacyMigrationCommand(new \App\Install\Service\LegacyMigration\LegacyMigrationHandler(new RewindableGenerator(function () use ($container) {
            yield 0 => (new \App\Install\Service\LegacyMigration\Steps\ChangeRewriteBase((\dirname(__DIR__, 3).'/public/legacy')));
            yield 1 => (isset($container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ChangeTheme']) ? $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ChangeTheme']() : $container->load('getChangeThemeService'));
            yield 2 => (isset($container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\CheckLegacyConfig']) ? $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\CheckLegacyConfig']() : $container->load('getCheckLegacyConfigService'));
            yield 3 => (new \App\Install\Service\LegacyMigration\Steps\InstallPortability((\dirname(__DIR__, 3).'/tmp/package/upgrade'), (\dirname(__DIR__, 3).'/public/legacy')));
            yield 4 => (isset($container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ManualConfigCheck']) ? $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ManualConfigCheck']() : $container->load('getManualConfigCheckService'));
            yield 5 => (isset($container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ManualRewriteBaseCheck']) ? $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\ManualRewriteBaseCheck']() : $container->load('getManualRewriteBaseCheckService'));
            yield 6 => (isset($container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\SetupEnv']) ? $container->factories['service_container']['App\\Install\\Service\\LegacyMigration\\Steps\\SetupEnv']() : $container->load('getSetupEnvService'));
        }, 7), ($container->services['monolog.logger.upgrade'] ?? $container->load('getMonolog_Logger_UpgradeService'))));

        $instance->setDefaultSessionName('PHPSESSID');
        $instance->setLegacySessionName('LEGACYSESSID');
        $instance->setSession(($container->services['session'] ?? $container->getSessionService()));
        $instance->setAppStringsHandler(($container->privates['App\\Languages\\LegacyHandler\\AppStringsHandler'] ?? $container->load('getAppStringsHandlerService')));
        $instance->setName('suitecrm:app:setup-legacy-migration');

        return $instance;
    }
}
