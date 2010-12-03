<?php

require_once realpath(dirname(__FILE__) . '/../bootstrap.php');

class IndexControllerTest extends ControllerTestCase
{
    public function testIndexAction()
    {
        $this->dispatch('/');
        $this->assertModule('default');
        $this->assertController('index');
        $this->assertAction('index');
   }
}
