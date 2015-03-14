<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;


/**
 * Interface ComplexInterface - Interface all ComplexTypes must implement.
 *
 * @package Broadworks_OCIP\core\Builder\Types
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
    public function getName();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return mixed
     */
    public function getElements();

    /**
     * @return mixed
     */
    public function getErrors();
}