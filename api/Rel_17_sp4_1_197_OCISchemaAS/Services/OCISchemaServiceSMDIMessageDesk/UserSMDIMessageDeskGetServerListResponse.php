<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSMDIMessageDeskGetServerListRequest.
 *         The SMDI Server table column headings are: "Device Name", "Net Address", "Port".
 */
class UserSMDIMessageDeskGetServerListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserSMDIMessageDeskGetServerListResponse';
    protected $smdiServerTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\UserSMDIMessageDeskGetServerListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSmdiServerTable(TableType $smdiServerTable = null)
    {
        if (!$smdiServerTable) return $this;
        $this->smdiServerTable = $smdiServerTable;
        $this->smdiServerTable->setName('smdiServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSmdiServerTable()
    {
        return $this->smdiServerTable;
    }
}
