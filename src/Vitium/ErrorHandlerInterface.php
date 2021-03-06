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

use \Throwable;

/**
 * Error handler
 *
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
interface ErrorHandlerInterface
{

    /**
     *
     * @param Throwable $exception
     */
    public function execute(Throwable $exception);

}