<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), (\dirname(__DIR__, 3).'/translations'), (\dirname(__DIR__, 3).'/templates'), [0 => (\dirname(__DIR__, 3).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 3).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 3).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 1 => (\dirname(__DIR__, 3).'/vendor/symfony/validator/ValidatorBuilder.php'), 2 => (\dirname(__DIR__, 3).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 3 => (\dirname(__DIR__, 3).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 4 => (\dirname(__DIR__, 3).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }
}
