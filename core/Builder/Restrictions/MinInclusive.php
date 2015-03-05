<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


class MinInclusive extends Restriction implements RestrictionInterface
{
    public function validate($input)
    {
        return ((int)$input >= (int)$this->value);
    }
}