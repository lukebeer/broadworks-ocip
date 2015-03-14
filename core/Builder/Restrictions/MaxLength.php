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
 * Class MaxLength - Specifies the maximum number of characters or list items allowed. Must be equal to or greater than zero.
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
 */
class MaxLength extends Restriction implements RestrictionInterface
{
    public function validate($input)
    {
        $length = strlen($input);
        $valid = (strlen($input) <= (int)$this->value);
        ($valid)
            ? $this->detail("Valid: String length of $length is valid, maxLength is {$this->value}")
            : $this->detail("Failed: String length of $length is invalid, maxLength is {$this->value}");
        return $valid;
    }
}