<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

use Broadworks_OCIP\core\Builder\Restrictions\RestrictionInterface;


abstract class SimpleType
{
    public $name = __CLASS__;
    protected $annontation;
    protected $restrictions;
    protected $value;
    protected $errors;

    use TypeTrait;

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

    public function addRestriction(RestrictionInterface $restriction)
    {
        $this->restrictions[] = $restriction;
    }

    public function getErrors()
    {
        return ['SchemaType' => __CLASS__, 'DataType' => '', 'Errors' => $this->errors];
    }
}