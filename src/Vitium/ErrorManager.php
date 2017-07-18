<?php

/**
 * Vitium: Error manager
 * Copyright (c) NewClass (http://newclass.pl)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the file LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) NewClass (http://newclass.pl)
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Vitium;

use \Exception;

/**
 * Error manager.
 *
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class ErrorManager
{

    /**
     *
     * @var ErrorDispatcher
     */
    private $dispatcher;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->stopPropagation = false;
        $this->runtimePath = getcwd();
        $this->dispatcher = new ErrorDispatcher();

        ini_set('display_errors', 'Off');
        register_shutdown_function(array(
            $this->dispatcher,
            'shutdown'
        ));
        set_error_handler(array(
            $this->dispatcher,
            'error'
        ));
        set_exception_handler(array(
            $this->dispatcher,
            'exception'
        ));
    }

    /**
     *
     * @param ErrorHandlerInterface $handler
     */
    public function addHandler(ErrorHandlerInterface $handler)
    {
        $this->dispatcher->addHandler($handler);
    }

    /**
     *
     * @return array
     */
    public function getHandlers()
    {
        return $this->dispatcher->getHandlers();
    }

    /**
     *
     * @param ErrorHandlerInterface $handler
     */
    public function removeHandler(ErrorHandlerInterface $handler)
    {
        $this->dispatcher->removeHandler($handler);
    }

    /**
     * Exception callback.
     *
     * @param Exception $exception
     */
    public function exception(Exception $exception)
    {
        $this->dispatcher->exception($exception);
    }
}