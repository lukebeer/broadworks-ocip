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
     * Response to SystemMediaServerGetListRequest. The SMDI Server table column
 *         headings are: "Device Name", "Net Address", "Port" and "Description".
 */
class SystemSMDIMessageDeskGetServerListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk\SystemSMDIMessageDeskGetServerListResponse';
    public    $name            = __CLASS__;
    protected $smdiServerTable = null;


    /**
     * 
     */
    public function setSmdiServerTable(core:OCITable $smdiServerTable = null)
    {
        $this->smdiServerTable = core:OCITable $smdiServerTable;
    }

    /**
     * 
     */
    public function getSmdiServerTable()
    {
        return (!$this->smdiServerTable) ?: $this->smdiServerTable->getValue();
    }
}