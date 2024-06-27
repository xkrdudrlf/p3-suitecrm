<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'OneLogin\Saml2\Auth' shared autowired service.
     *
     * @return \OneLogin\Saml2\Auth
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/onelogin/php-saml/src/Saml2/Auth.php';

        return $container->privates['OneLogin\\Saml2\\Auth'] = new \OneLogin\Saml2\Auth($container->parameters['hslavich_onelogin_saml.settings']);
    }
}
