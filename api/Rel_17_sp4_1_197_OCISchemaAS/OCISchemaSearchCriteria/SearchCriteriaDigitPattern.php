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
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDigitPattern';
    public    $name              = __CLASS__;
    protected $mode              = null;
    protected $value             = null;
    protected $isCaseInsensitive = null;

    public function __construct(
         $mode,
         $value,
         $isCaseInsensitive
    ) {
        $this->setMode($mode);
        $this->setValue($value);
        $this->setIsCaseInsensitive($isCaseInsensitive);
    }

    /**
     * Search mode when searching for string data.
     */
    public function setMode($mode = null)
    {
        $this->mode = ($mode InstanceOf SearchMode)
             ? $mode
             : new SearchMode($mode);
    }

    /**
     * Search mode when searching for string data.
     */
    public function getMode()
    {
        return (!$this->mode) ?: $this->mode->getValue();
    }

    /**
     * Digit patterns that are used to restrict calls Communicaton Barring.
     *         The patterns can consist of the digits 0 through 9 and a leading + and the following wild cards:
     *         *  - Any number of digits.  For example 555* matches any digit string beginning with 555 plus zroe or more additional digits. 
     *         ? - a single-digit placeholder. For example, 555???? matches any string beginning with 555, plus at least four additional digits.  
     *         []  -  Indicates a range of digits. A consecutive range indicated with a hyphen (-), or a nonconsecutive range with a comma (,). Hyphens and commas can be used in combination ie [5-7,9].  Only single-digit ranges are supported. ie. [98-102] is invalid.
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf DigitPattern)
             ? $value
             : new DigitPattern($value);
    }

    /**
     * Digit patterns that are used to restrict calls Communicaton Barring.
     *         The patterns can consist of the digits 0 through 9 and a leading + and the following wild cards:
     *         *  - Any number of digits.  For example 555* matches any digit string beginning with 555 plus zroe or more additional digits. 
     *         ? - a single-digit placeholder. For example, 555???? matches any string beginning with 555, plus at least four additional digits.  
     *         []  -  Indicates a range of digits. A consecutive range indicated with a hyphen (-), or a nonconsecutive range with a comma (,). Hyphens and commas can be used in combination ie [5-7,9].  Only single-digit ranges are supported. ie. [98-102] is invalid.
     */
    public function getValue()
    {
        return (!$this->value) ?: $this->value->getValue();
    }

    /**
     * 
     */
    public function setIsCaseInsensitive($isCaseInsensitive = null)
    {
        $this->isCaseInsensitive = (boolean) $isCaseInsensitive;
    }

    /**
     * 
     */
    public function getIsCaseInsensitive()
    {
        return (!$this->isCaseInsensitive) ?: $this->isCaseInsensitive->getValue();
    }
}
