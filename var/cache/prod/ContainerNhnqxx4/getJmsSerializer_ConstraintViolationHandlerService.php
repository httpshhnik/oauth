<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.constraint_violation_handler' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Handler/ConstraintViolationHandler.php';

return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
