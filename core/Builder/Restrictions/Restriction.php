<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


/**
 * Class Restriction - Abstract base class all restrictions must extend.
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
 */
abstract class Restriction
{
    protected $value;
    protected $detail;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param null $detail
     * @return null
     */
    public function detail($detail = null)
    {
        if ($detail) {
            $this->detail = $detail;
        }
        return $this->detail;
    }
}