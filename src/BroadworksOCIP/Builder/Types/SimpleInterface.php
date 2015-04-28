<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Types;

use BroadworksOCIP\Builder\Restrictions\RestrictionInterface;

/**
 * Interface SimpleInterface - Interface all SimpleTypes must implement.
 *
 * @package BroadworksOCIP\Builder\Types
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
    public function getElementName();

    /**
     * @return mixed
     */
    public function getElementValue();

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