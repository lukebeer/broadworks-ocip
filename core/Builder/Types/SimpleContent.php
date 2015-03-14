<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;


/**
 * Class SimpleContent - Contains extensions or restrictions on a text-only complex type or on a simple type as content and contains no elements.
 *
 * @package Broadworks_OCIP\core\Builder\Types
 */
class SimpleContent extends SimpleType implements SimpleInterface
{

    /**
     * @param mixed $value
     */
    public function __construct($value = null)
    {
        $this->value = $value;
    }
}