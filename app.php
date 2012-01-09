<?php
/*
Plugin Name: Hello World
Plugin URI: https://github.com/eabay/oo-wordpress-sample-plugin
Description: Sample plugin to show OO-WordPress usage.
Author: Erhan Abay
Version: 1.0
Author URI: http://erhanabay.com/
*/
require_once 'vendor/.composer/autoload.php';

use Hwm\WordPress\Plugin\PluginManager;
use SampleApp\Plugins\HelloWorld;


$manager = new PluginManager;

$manager->addPlugin(new HelloWorld);