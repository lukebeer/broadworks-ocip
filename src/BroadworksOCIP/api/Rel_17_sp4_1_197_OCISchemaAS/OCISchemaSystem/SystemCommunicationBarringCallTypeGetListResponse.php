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
 * Response to a SystemCommunicationBarringCallTypeGetListRequest. Contains a table with one row per Communication Barring Call Type.  The table column headings are: "Call Type" and "Network Server Call Type".
 */
class SystemCommunicationBarringCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringCallTypeGetListResponse';
    protected $callTypeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringCallTypeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallTypeTable(TableType $callTypeTable = null)
    {
        $this->callTypeTable = $callTypeTable;
        $this->callTypeTable->setElementName('callTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallTypeTable()
    {
        return $this->callTypeTable;
    }
}
