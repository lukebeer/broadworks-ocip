<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPlan; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupCallingPlanGetDigitPatternListRequest.
 *         Contains a table with column headings: "Name", "Digit Pattern".
 */
class GroupCallingPlanGetDigitPatternListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPlan\GroupCallingPlanGetDigitPatternListResponse';
    public    $name              = __CLASS__;
    protected $digitPatternTable = null;


    /**
     * 
     */
    public function setDigitPatternTable(core:OCITable $digitPatternTable = null)
    {
        $this->digitPatternTable = core:OCITable $digitPatternTable;
    }

    /**
     * 
     */
    public function getDigitPatternTable()
    {
        return (!$this->digitPatternTable) ?: $this->digitPatternTable->getValue();
    }
}
