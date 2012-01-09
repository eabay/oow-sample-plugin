<?php

namespace SampleApp\Plugins;

/** @Plugin */
class HelloWorld
{
    /** @Hook(tag="wp_footer") */
    public function sayHello()
    {
        echo 'Hello from footer';
    }
}