<?php
/*
Plugin Name: Hello World
Plugin URI: https://github.com/eabay/oow-sample-plugin
Description: Sample plugin to show Oow usage.
Author: Erhan Abay
Version: 1.0
Author URI: http://erhanabay.com/
*/

require_once __DIR__. '/vendor/.composer/autoload.php';


$manager = new Oow\Plugin\PluginManager;

$manager->addPlugin(new SampleApp\Plugins\HelloWorld);