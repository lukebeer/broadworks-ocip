<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemServiceCodeGetListRequest.
 *         Contains a table of defined service codes
 *         The column headings are: "Service Code", and "Description".
 */
class SystemServiceCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemServiceCodeGetListResponse';
    protected $serviceCodeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceCodeTable(TableType $serviceCodeTable = null)
    {
        $this->serviceCodeTable = $serviceCodeTable;
        $this->serviceCodeTable->setElementName('serviceCodeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceCodeTable()
    {
        return $this->serviceCodeTable;
    }
}
