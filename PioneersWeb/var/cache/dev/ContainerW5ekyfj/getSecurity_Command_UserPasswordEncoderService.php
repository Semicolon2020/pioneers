<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.command.user_password_encoder' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand.php';

$this->services['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : ($this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory([]))) && false ?: '_'}, []);

$instance->setName('security:encode-password');

return $instance;
