<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.oauth_token' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Security/FirewallContext.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Security/FirewallConfig.php';

return $this->services['security.firewall.map.context.oauth_token'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    return new \EmptyIterator();
}, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('oauth_token', 'security.user_checker', 'security.request_matcher.q0ptkup', false, '', '', '', '', '', '', array(), ''));
