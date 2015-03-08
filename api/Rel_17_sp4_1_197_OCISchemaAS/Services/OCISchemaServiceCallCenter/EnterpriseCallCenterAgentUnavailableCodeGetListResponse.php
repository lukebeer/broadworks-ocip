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
     * Response to the EnterpriseCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 */
class EnterpriseCallCenterAgentUnavailableCodeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\EnterpriseCallCenterAgentUnavailableCodeGetListResponse';
    public    $name                  = __CLASS__;
    protected $unavailableCodesTable = null;


    /**
     * 
     */
    public function setUnavailableCodesTable(core:OCITable $unavailableCodesTable = null)
    {
        $this->unavailableCodesTable = core:OCITable $unavailableCodesTable;
    }

    /**
     * 
     */
    public function getUnavailableCodesTable()
    {
        return (!$this->unavailableCodesTable) ?: $this->unavailableCodesTable->getValue();
    }
}
