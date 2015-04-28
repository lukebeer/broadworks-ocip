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
 * Class Enumeration - Defines a list of acceptable values.
 *
 * @package BroadworksOCIP\Builder\Restrictions
 */
class Enumeration extends Restriction implements RestrictionInterface
{
    public function validate($input)
    {
        return (in_array($input, $this->value, null))
            ? $this->detail("Valid: $input is in array")
            : $this->detail("Invalid: $input is not in array");
    }

}