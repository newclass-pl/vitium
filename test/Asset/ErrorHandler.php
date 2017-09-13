<?php
/**
 * Created by PhpStorm.
 * User: mtomczak
 * Date: 13/09/2017
 * Time: 12:00
 */

namespace Test\Asset;


use Throwable;
use Vitium\ErrorHandlerInterface;

class ErrorHandler implements ErrorHandlerInterface
{
    /**
     * @var Throwable
     */
    private $exception;

    /**
     *
     * @param Throwable $exception
     */
    public function execute(Throwable $exception)
    {
        $this->exception=$exception;
    }

    /**
     * @return Throwable
     */
    public function getException()
    {
        return $this->exception;
    }
}