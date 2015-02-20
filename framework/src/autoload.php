<?php

require_once dirname(__DIR__) . '/../vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\Tests\UniversalClassLoader;

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->register();
$loader->registerNamespace('Symfony\\Component\\HttpFoundation', dirname(__DIR__) . '/../vendor/symfony/http-foundation');