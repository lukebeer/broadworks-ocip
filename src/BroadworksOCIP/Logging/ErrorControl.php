<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Logging;

/**
 * Class ErrorControl - Crappy logging object, needs nuking and starting again.
 *
 * @package BroadworksOCIP\Logging
 */
class ErrorControl
{
    protected $errors;
    protected $lastError;

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
        return ($this->errors !== null);
    }
}