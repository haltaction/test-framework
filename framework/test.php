<?php

class IndexTest extends \PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $_GET['name'] = 'Vova';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Vova', $content);
    }

    public function testGoodbye()
    {
        ob_start();
        include 'bye.php';
        $content = ob_get_clean();

        $this->assertEquals('Goodbye!', $content);
    }
}