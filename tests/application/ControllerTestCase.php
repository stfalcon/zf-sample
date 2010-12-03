<?php

/**
 * @see Zend_Test_PHPUnit_ControllerTestCase
 */
require_once 'Zend/Test/PHPUnit/ControllerTestCase.php';

abstract class ControllerTestCase extends Zend_Test_PHPUnit_ControllerTestCase
{

    public function setUp()
    {
        $this->bootstrap = array($this, 'appBootstrap');
        parent::setUp();
    }

    public function appBootstrap()
    {
        $this->bootstrap = new Zend_Application(
            APPLICATION_ENV,
            APPLICATION_PATH . '/configs/application.ini'
        );

        $this->bootstrap->bootstrap();
    }

}
