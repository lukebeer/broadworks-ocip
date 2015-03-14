<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


/**
 * Class Pattern - Defines the exact sequence of characters that are acceptable.
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
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