<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Restrictions;


/**
 * Class Pattern - Defines the exact sequence of characters that are acceptable.
 *
 * @package BroadworksOCIP\Builder\Restrictions
 */
class Pattern extends Restriction implements RestrictionInterface
{
    /**
     * @param $input
     * @return int
     */
    public function validate($input)
    {
        $valid = preg_match("/$this->value/", $input);
        ($valid)
            ? $this->detail("Valid: String $input is valid, validation pattern is {$this->value}")
            : $this->detail("Failed: String $input is invalid, validation pattern is {$this->value}");
        return $valid;
    }
}