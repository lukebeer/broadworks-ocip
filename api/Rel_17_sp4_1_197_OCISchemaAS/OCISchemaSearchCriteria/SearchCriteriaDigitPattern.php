<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for digit pattern.
 */
class SearchCriteriaDigitPattern extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $mode               = null;
    protected $value              = null;
    protected $isCaseInsensitive  = null;

    public function __construct(
         $mode,
         $value,
         $isCaseInsensitive
    ) {
        $this->setMode($mode);
        $this->setValue($value);
        $this->setIsCaseInsensitive($isCaseInsensitive);
    }

    public function setMode($mode = null)
    {
        $this->mode = ($mode InstanceOf SearchMode)
             ? $mode
             : new SearchMode($mode);
    }

    public function getMode()
    {
        return (!$this->mode) ?: $this->mode->value();
    }

    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf DigitPattern)
             ? $value
             : new DigitPattern($value);
    }

    public function getValue()
    {
        return (!$this->value) ?: $this->value->value();
    }

    public function setIsCaseInsensitive(xs:boolean $isCaseInsensitive = null)
    {
    }

    public function getIsCaseInsensitive()
    {
        return (!$this->isCaseInsensitive) ?: $this->isCaseInsensitive->value();
    }
}
