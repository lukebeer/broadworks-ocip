<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * The response to a SystemCommunicationBarringDigitPatternCriteriaGetRequest.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $description   = null;
    protected $digitPattern  = null;


    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DigitPatternCriteriaDescription)
             ? $description
             : new DigitPatternCriteriaDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setDigitPattern($digitPattern = null)
    {
        $this->digitPattern = ($digitPattern InstanceOf DigitPattern)
             ? $digitPattern
             : new DigitPattern($digitPattern);
    }

    public function getDigitPattern()
    {
        return (!$this->digitPattern) ?: $this->digitPattern->value();
    }
}
