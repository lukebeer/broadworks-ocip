<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

use Broadworks_OCIP\core\Builder\Restrictions\RestrictionInterface;


class SimpleContent extends SimpleType implements SimpleInterface
{

    public function __construct($name)
    {
        $this->setName($name);
    }
}