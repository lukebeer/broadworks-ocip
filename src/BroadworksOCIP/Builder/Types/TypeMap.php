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
 * Class TypeMap - Converts xs types to PHP types.
 *
 * @package BroadworksOCIP\Builder\Types
 */
abstract class TypeMap
{
    const BOOLEAN = 1;
    const STRING = 2;

    /**
     * @param $type
     * @return string
     */
    static public function type($type)
    {
        switch ($type) {
            case 'xs:boolean':
                return 'boolean';
            case 'xs:int':
                return 'int';
            case 'xs:token':
            case 'xs:NMTOKEN':
                return 'string';
            case 'xs:base64Binary':
                return 'base64';
            default:
                return $type;
        }
    }
}