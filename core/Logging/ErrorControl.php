<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Logging;

class ErrorControl
{
    var $errors = null;
    var $lastError = null;

    public function addError($error)
    {
        $this->errors[] = $error;
        $this->lastError = $error;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getLastError()
    {
        return $this->lastError;
    }

    public function clearLastError()
    {
        $this->lastError = null;
    }

    public function hasErrors()
    {
        return ($this->errors != null);
    }
}