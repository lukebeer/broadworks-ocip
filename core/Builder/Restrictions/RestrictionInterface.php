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
 * Interface RestrictionInterface - Interface all Restrictins must implement.
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
 */
interface RestrictionInterface
{

    /**
     * @param $value
     */
    public function __construct($value);

    /**
     * @param $input
     * @return mixed
     */
    public function validate($input);

    /**
     * @return mixed
     */
    public function detail();
}