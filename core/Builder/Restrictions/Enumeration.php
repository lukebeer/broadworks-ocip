<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


/**
 * Class Enumeration - Defines a list of acceptable values.
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
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