<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemDialPlanPolicyGetAccessCodeListRequest.
 *         Contains a table with column headings: "Access Code", "Enable Secondary Dial Tone", "Description"
 */
class SystemDialPlanPolicyGetAccessCodeListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialPlanPolicyGetAccessCodeListResponse';
    public    $name            = __CLASS__;
    protected $accessCodeTable = null;


    /**
     * 
     */
    public function setAccessCodeTable(core:OCITable $accessCodeTable = null)
    {
        $this->accessCodeTable = core:OCITable $accessCodeTable;
    }

    /**
     * 
     */
    public function getAccessCodeTable()
    {
        return (!$this->accessCodeTable) ?: $this->accessCodeTable->getValue();
    }
}
