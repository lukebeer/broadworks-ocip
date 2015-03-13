<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;


use Broadworks_OCIP\core\Builder\Restrictions\RestrictionInterface;

/**
 * Class SimpleContent
 * @package Broadworks_OCIP\core\Builder\Types
 */
class SimpleContent extends SimpleType implements SimpleInterface
{

    /**
     * @param $name
     */
    public function __construct($value=null)
    {
        $this->value = $value;
    }
}