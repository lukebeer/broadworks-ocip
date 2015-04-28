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
 * Interface ComplexInterface - Interface all ComplexTypes must implement.
 *
 * @package BroadworksOCIP\Builder\Types
 */
interface ComplexInterface
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
     * @return mixed
     */
    public function getElements();

    /**
     * @return mixed
     */
    public function getErrors();
}