<?php

require_once realpath(dirname(__FILE__) . '/../bootstrap.php');

class ErrorControllerTest extends ControllerTestCase
{
    public function testErrorUrl()
    {
        $this->dispatch('foo');
        $this->assertModule('default');
        $this->assertController('error');
        $this->assertAction('error');
        $this->assertResponseCode(404);
    }
}