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
 * Class TypeTrait - Common trait all types have.
 * @package BroadworksOCIP\Builder\Types
 */
trait TypeTrait
{
    protected $elementValue;
    protected $elementName;
    protected $selfClosed;
    protected $attributes;

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
    public function getElementValue()
    {
        return $this->elementValue;
    }

    /**
     * @return mixed
     */
    public function setElementValue($elementValue = null)
    {
        $this->elementValue = $elementValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * @param $name
     */
    public function setElementName($elementName = null)
    {
        $this->elementName = $elementName;
        return $this;
    }

    /**
     * @param $selfClosed
     */
    public function getSelfClosed()
    {
        return $this->selfClosed;
    }

    /**
     * @param $selfClosed
     */
    public function setSelfClosed($selfClosed = true)
    {
        $this->selfClosed = $selfClosed;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttributes()
    {
        return ($this->attributes) ? $this->attributes : [];
    }

    /**
     * @param $name
     */
    public function setAttribute($attributeName = null, $attributeValue = null)
    {
        if ($attributeName) {
            $this->attributes[$attributeName] = $attributeValue;
        }
        return $this;
    }
}