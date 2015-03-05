<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;


interface ComplexInterface
{
    public function validate();

    public function getType();

    public function getName();

    public function getValue();

    public function getElements();

    public function getErrors();
}