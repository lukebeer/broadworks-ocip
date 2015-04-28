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
 * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI Servers".
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSMDIMessageDeskGetServerRouteListResponse';
    protected $smdiServerRouteTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SystemSMDIMessageDeskGetServerRouteListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSmdiServerRouteTable(TableType $smdiServerRouteTable = null)
    {
        $this->smdiServerRouteTable = $smdiServerRouteTable;
        $this->smdiServerRouteTable->setElementName('smdiServerRouteTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSmdiServerRouteTable()
    {
        return $this->smdiServerRouteTable;
    }
}
