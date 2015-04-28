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
 * Response to a SystemCommunicationBarringAlternateCallIndicatorGetListRequest. Contains a table with one row per Communication Barring Alternate Call Indicator.  The table column headings are: "Alternate Call Indicator" and "Network Server Alternate Call Indicator".
 */
class SystemCommunicationBarringAlternateCallIndicatorGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringAlternateCallIndicatorGetListResponse';
    protected $alternateCallIndicatorTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringAlternateCallIndicatorGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlternateCallIndicatorTable(TableType $alternateCallIndicatorTable = null)
    {
        $this->alternateCallIndicatorTable = $alternateCallIndicatorTable;
        $this->alternateCallIndicatorTable->setElementName('alternateCallIndicatorTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAlternateCallIndicatorTable()
    {
        return $this->alternateCallIndicatorTable;
    }
}
