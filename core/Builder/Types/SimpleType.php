<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

use Broadworks_OCIP\core\Builder\Restrictions\Restriction;

/**
 * Class SimpleType - Defines a simple type and specifies the constraints and information about the values of attributes or text-only elements.
 *
 * @package Broadworks_OCIP\core\Builder\Types
 */
abstract class SimpleType
{
    public $name = __CLASS__;
    protected $annontation;
    protected $attributes;
    protected $restrictions = [];
    protected $errors;

    use TypeTrait;

    /**
     * SimpleTypes can have restrictions to validate the data. Restrictions are tests such as max or min string length.
     *
     * @return bool
     */
    public function validate()
    {
        $valid = true;
        foreach ($this->restrictions as $restriction) {
            if (!$restriction->validate($this->value)) {
                $this->errors[] = $restriction->detail();
                $valid = false;
            }
        }
        return $valid;
    }

    /**
     * Add restriction into array for input validation.
     *
     * @param Restriction $restriction
     */
    public function addRestriction(Restriction $restriction)
    {
        $this->restrictions[] = $restriction;
    }

    /**
     * Return any errors generated during input validation.
     *
     * @return array
     */
    public function getErrors()
    {
        return ['SchemaType' => __CLASS__, 'DataType' => '', 'Errors' => $this->errors];
    }

    /**
     * Return name of SimpleType.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of SimpleType.
     *
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}