<?php
/**
 * Created by PhpStorm.
 * User: mtomczak
 * Date: 13/09/2017
 * Time: 11:48
 */

namespace Test\Vitium;


use Test\Asset\ErrorHandler;
use Vitium\ErrorManager;

class ErrorManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ErrorManager
     */
    private $errorManager;

    public function setUp()
    {
        $this->errorManager=new ErrorManager();
    }

    public function testAddHandlerGetHandlersRemoveHandler(){
        $handler=new ErrorHandler();
        $this->errorManager->addHandler($handler);
        $handlers=$this->errorManager->getHandlers();
        $this->assertCount(1,$handlers);
        $this->assertEquals($handler,$handlers[0]);

        $this->errorManager->removeHandler($handler);
        $handlers=$this->errorManager->getHandlers();
        $this->assertCount(0,$handlers);
    }

    public function testThrow(){
        $handler=new ErrorHandler();
        $this->errorManager->addHandler($handler);
        throw new \Exception('test');
    }

}