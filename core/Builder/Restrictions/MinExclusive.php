<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


class MinExclusive extends Restriction implements RestrictionInterface
{
    public function validate($input)
    {
        $valid = ((int)$input >= (int)$this->value);
        ($valid)
            ? $this->detail("Valid: Int $input is valid, min is {$this->value}")
            : $this->detail("Failed: Int $input is invalid, min is {$this->value}");
        return $valid;
    }
}