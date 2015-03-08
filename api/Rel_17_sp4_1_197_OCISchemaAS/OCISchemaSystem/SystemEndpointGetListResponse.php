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
     * Response to SystemEndpointGetListRequest.
 *         The column headings for the endpointTable are: "Organization Id", "Organization Type", "Group Id", "Line/Port", "Last Name","First Name", "User Id", "User Type", "Phone Number", "Extension", "Device Type", "Device Name", "Net Address", "MAC Address".
 *         Possible values for User Type are ‘User’, ‘CCBasic’, ‘CCStandard’, ‘CCPremium’, ‘RP’, ‘MOH’, ‘MOHVideo’.
 */
class SystemEndpointGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemEndpointGetListResponse';
    public    $name          = __CLASS__;
    protected $endpointTable = null;


    /**
     * 
     */
    public function setEndpointTable(core:OCITable $endpointTable = null)
    {
        $this->endpointTable = core:OCITable $endpointTable;
    }

    /**
     * 
     */
    public function getEndpointTable()
    {
        return (!$this->endpointTable) ?: $this->endpointTable->getValue();
    }
}
