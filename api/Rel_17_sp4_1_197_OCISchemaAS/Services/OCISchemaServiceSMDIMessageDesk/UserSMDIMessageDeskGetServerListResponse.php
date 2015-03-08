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
     * Response to the UserSMDIMessageDeskGetServerListRequest.
 *         The SMDI Server table column headings are: "Device Name", "Net Address", "Port".
 */
class UserSMDIMessageDeskGetServerListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $smdiServerTable = null;


    /**
     * 
     */
    public function setSmdiServerTable(core:OCITable $smdiServerTable = null)
    {
        $this->smdiServerTable =  $smdiServerTable;
    }

    /**
     * 
     */
    public function getSmdiServerTable()
    {
        return (!$this->smdiServerTable) ?: $this->smdiServerTable->getValue();
    }
}
