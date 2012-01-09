<?php
/**
 * Default autoloader is Doctrine/Common/ClassLoader.
 * If you want to use Symfony ClassLoader component,
 * install suggested packages with by running command:
 * 
 * /////////////////////////////////////////////////
 * // php composer.phar update --install-suggests //
 * /////////////////////////////////////////////////
 */

if (!class_exists('Symfony\Component\ClassLoader\UniversalClassLoader')) {
    require_once __DIR__.'/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';
}

$loader = new Symfony\Component\ClassLoader\UniversalClassLoader;
$loader->registerNamespaces(require __DIR__.'/vendor/.composer/autoload_namespaces.php');
$loader->register();