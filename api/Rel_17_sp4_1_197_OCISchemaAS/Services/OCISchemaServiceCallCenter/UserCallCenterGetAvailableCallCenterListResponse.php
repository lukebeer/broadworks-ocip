<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCallCenterGetAvailableCallCenterListRequest.
 *         Contains a table with column heading: "Service User Id".
 */
class UserCallCenterGetAvailableCallCenterListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\UserCallCenterGetAvailableCallCenterListResponse';
    public    $name            = __CLASS__;
    protected $callCenterTable = null;


    /**
     * 
     */
    public function setCallCenterTable(core:OCITable $callCenterTable = null)
    {
        $this->callCenterTable = core:OCITable $callCenterTable;
    }

    /**
     * 
     */
    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->getValue();
    }
}
