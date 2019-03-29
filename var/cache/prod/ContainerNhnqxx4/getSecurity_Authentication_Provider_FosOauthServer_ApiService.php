<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.fos_oauth_server.api' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Security/Authentication/Provider/OAuthProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/InMemoryUserProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserChecker.php';

return $this->services['security.authentication.provider.fos_oauth_server.api'] = new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider(${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : ($this->services['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(array()))) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->load('getFosOauthServer_ServerService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : ($this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'});