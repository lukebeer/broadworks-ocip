<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse';
    public    $name              = __CLASS__;
    protected $matchDigitPattern = null;


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
