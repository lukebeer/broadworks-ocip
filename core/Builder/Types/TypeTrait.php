<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;


trait TypeTrait
{
    protected $value;


    public function getType()
    {
        return join('', array_slice(explode('\\', get_class($this)), -1));
    }

    public function getValue()
    {
        return $this->value;
    }


}