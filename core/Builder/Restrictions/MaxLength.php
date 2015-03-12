<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


/**
 * Class MaxLength
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