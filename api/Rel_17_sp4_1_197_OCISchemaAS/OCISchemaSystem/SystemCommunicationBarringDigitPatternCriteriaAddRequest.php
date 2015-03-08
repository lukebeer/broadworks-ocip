<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a new Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaAddRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $name              = null;
    protected $description       = null;
    protected $matchDigitPattern = null;

    public function __construct(
         $name,
         $description = null,
         $matchDigitPattern = null
    ) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setMatchDigitPattern($matchDigitPattern);
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

    /**
     * Digit Pattern Criteria Description
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DigitPatternCriteriaDescription)
             ? $description
             : new DigitPatternCriteriaDescription($description);
    }

    /**
     * Digit Pattern Criteria Description
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Digit patterns that are used to restrict calls Communicaton Barring.
     *         The patterns can consist of the digits 0 through 9 and a leading + and the following wild cards:
     *         *  - Any number of digits.  For example 555* matches any digit string beginning with 555 plus zroe or more additional digits. 
     *         ? - a single-digit placeholder. For example, 555???? matches any string beginning with 555, plus at least four additional digits.  
     *         []  -  Indicates a range of digits. A consecutive range indicated with a hyphen (-), or a nonconsecutive range with a comma (,). Hyphens and commas can be used in combination ie [5-7,9].  Only single-digit ranges are supported. ie. [98-102] is invalid.
     */
    public function setMatchDigitPattern($matchDigitPattern = null)
    {
        $this->matchDigitPattern = ($matchDigitPattern InstanceOf DigitPattern)
             ? $matchDigitPattern
             : new DigitPattern($matchDigitPattern);
    }

    /**
     * Digit patterns that are used to restrict calls Communicaton Barring.
     *         The patterns can consist of the digits 0 through 9 and a leading + and the following wild cards:
     *         *  - Any number of digits.  For example 555* matches any digit string beginning with 555 plus zroe or more additional digits. 
     *         ? - a single-digit placeholder. For example, 555???? matches any string beginning with 555, plus at least four additional digits.  
     *         []  -  Indicates a range of digits. A consecutive range indicated with a hyphen (-), or a nonconsecutive range with a comma (,). Hyphens and commas can be used in combination ie [5-7,9].  Only single-digit ranges are supported. ie. [98-102] is invalid.
     */
    public function getMatchDigitPattern()
    {
        return (!$this->matchDigitPattern) ?: $this->matchDigitPattern->getValue();
    }
}
