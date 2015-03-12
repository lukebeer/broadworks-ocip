<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Logging;

/**
 * Crappy logging object, needs nuking and starting again.
 *
 * Class ErrorControl
 * @package Broadworks_OCIP\core\Logging
 */
class ErrorControl
{
    var $errors = null;
    var $lastError = null;

    /**
     * Add error into errors array.
     *
     * @param $error
     */
    public function addError($error)
    {
        $this->errors[] = $error;
        $this->lastError = $error;
    }

    /**
     * Return errors.
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Return last error.
     *
     * @return null
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * Clear last error.
     */
    public function clearLastError()
    {
        $this->lastError = null;
    }

    /**
     * Check if object has errors.
     *
     * @return bool
     */
    public function hasErrors()
    {
        return ($this->errors != null);
    }
}