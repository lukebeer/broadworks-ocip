<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemMediaServerGetListRequest. The SMDI Server table column
 *         headings are: "Device Name", "Net Address", "Port" and "Description".
 */
class SystemSMDIMessageDeskGetServerListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSMDIMessageDeskGetServerListResponse';
    protected $smdiServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SystemSMDIMessageDeskGetServerListResponse $response
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
        $this->smdiServerTable = $smdiServerTable;
        $this->smdiServerTable->setElementName('smdiServerTable');
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
