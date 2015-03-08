<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete an existing Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;
    protected $name = null;

    public function __construct(
         $name
    ) {
        $this->setName($name);
    }

    /**
     * Digit Pattern Criteria Name
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
    }

    /**
     * Digit Pattern Criteria Name
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }
}
