<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
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
        return (in_array($input, $this->value))
            ? $this->detail("Valid: $input is in array")
            : $this->detail("Invalid: $input is not in array");
    }

}