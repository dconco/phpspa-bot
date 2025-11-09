<?php

// Include Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$appEnv = getenv('APP_ENV') ?: '';

$envFile = match ($appEnv) {
   'prod' => '.env.prod',
   'dev'  => '.env.dev',
   'development'  => '.env.development',
   'production'  => '.env.production',
   'local' => '.env.local',
   default => '.env'
};

$dotenv = Dotenv::createImmutable(realpath(__DIR__ . '/..'), $envFile);
$dotenv->load();

// Change to src directory for proper file resolution
chdir(__DIR__ . '/../src');

// Include the main application file
require_once __DIR__ . '/../src/index.php';