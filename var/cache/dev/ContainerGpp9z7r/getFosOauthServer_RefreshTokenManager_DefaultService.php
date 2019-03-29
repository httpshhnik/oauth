<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.refresh_token_manager.default' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/TokenManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/TokenManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Entity/TokenManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/RefreshTokenManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Entity/RefreshTokenManager.php';

return $this->services['fos_oauth_server.refresh_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\RefreshTokenManager(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->load('getFosOauthServer_EntityManagerService.php')) && false ?: '_'}, 'AppBundle\\Entity\\RefreshToken');
