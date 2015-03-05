<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;


abstract class ComplexType
{
    public $name = __CLASS__;
    protected $elements = [];
    protected $errors;
    protected $args;

    use TypeTrait;

    public function validate()
    {
        foreach ($this->params as $param) {
            if (!$param->validate()) {
                ;
                $this->errors[$param->name()] = $param->errors();
            }
        }
    }

    public function getElements()
    {
        return get_object_vars($this);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}