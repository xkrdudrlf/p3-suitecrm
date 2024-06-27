<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSetSessionLanguageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Languages\LegacyHandler\SetSessionLanguage' shared autowired service.
     *
     * @return \App\Languages\LegacyHandler\SetSessionLanguage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Languages/LegacyHandler/SetSessionLanguage.php';

        return $container->privates['App\\Languages\\LegacyHandler\\SetSessionLanguage'] = new \App\Languages\LegacyHandler\SetSessionLanguage(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()), ($container->privates['App\\Authentication\\LegacyHandler\\UserHandler'] ?? $container->getUserHandlerService()));
    }
}
