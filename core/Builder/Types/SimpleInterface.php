<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

use Broadworks_OCIP\core\Builder\Restrictions\RestrictionInterface;

/**
 * Interface SimpleInterface - Interface all SimpleTypes must implement.
 *
 * @package Broadworks_OCIP\core\Builder\Types
 */
interface SimpleInterface
{
    /**
     * @return mixed
     */
    public function validate();

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param RestrictionInterface $restriction
     * @return mixed
     */
    public function addRestriction(RestrictionInterface $restriction);

    /**
     * @return mixed
     */
    public function getErrors();
}