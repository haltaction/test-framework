<?php

use Symfony\Component\Routing;

class UrlTest
{
    public function TestName()
    {
        $generator = new Routing\Generator\UrlGenerator($routes, $context);

        echo $generator->generate('hello', array('name' => 'vova'), true);
    }
}

$test = new UrlTest();
$test->TestName();