<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Restrictions;


/**
 * Class Comment - Hack.
 *
 * @package BroadworksOCIP\Builder\Restrictions
 */
class Comment extends Restriction implements RestrictionInterface
{
    /**
     * @param $input
     * @return int
     */
    public function validate($input)
    {
        return true;
    }
}