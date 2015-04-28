<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Types;

/**
 * Class PrimitiveType - Primitive type such as bool/int/string.
 *
 * @package BroadworksOCIP\Builder\Types
 */
class PrimitiveType extends SimpleType
{
    /**
     * @param null $elementValue
     */
    public function __construct($elementValue = null)
    {
        $this->elementValue = $elementValue;
    }
}