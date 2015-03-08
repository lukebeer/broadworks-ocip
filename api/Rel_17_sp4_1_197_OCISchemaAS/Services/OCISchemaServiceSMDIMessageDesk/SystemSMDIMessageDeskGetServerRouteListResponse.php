<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI Servers".
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk\SystemSMDIMessageDeskGetServerRouteListResponse';
    public    $name                 = __CLASS__;
    protected $smdiServerRouteTable = null;


    /**
     * 
     */
    public function setSmdiServerRouteTable(core:OCITable $smdiServerRouteTable = null)
    {
        $this->smdiServerRouteTable = core:OCITable $smdiServerRouteTable;
    }

    /**
     * 
     */
    public function getSmdiServerRouteTable()
    {
        return (!$this->smdiServerRouteTable) ?: $this->smdiServerRouteTable->getValue();
    }
}
