<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.server' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/OAuth2.php';

return $this->services['fos_oauth_server.server'] = new \OAuth2\OAuth2(${($_ = isset($this->services['fos_oauth_server.storage']) ? $this->services['fos_oauth_server.storage'] : $this->load('getFosOauthServer_StorageService.php')) && false ?: '_'}, array());
