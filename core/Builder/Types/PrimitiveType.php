<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

/**
 * Class PrimitiveType
 * @package Broadworks_OCIP\core\Builder\Types
 */
class PrimitiveType extends SimpleType
{
    /**
     * @param null $value
     */
    public function __construct($value=null)
    {
        $this->value = $value;
    }
}