<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

/**
 * Class TypeTrait - Common trait all types have.
 * @package Broadworks_OCIP\core\Builder\Types
 */
trait TypeTrait
{
    protected $value;

    /**
     * @return string
     */
    public function getType()
    {
        return implode('', array_slice(explode('\\', get_class($this)), -1));
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}