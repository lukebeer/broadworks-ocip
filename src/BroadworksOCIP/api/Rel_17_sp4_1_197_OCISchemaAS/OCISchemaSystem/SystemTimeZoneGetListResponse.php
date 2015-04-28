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
 * Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each time zone.
 */
class SystemTimeZoneGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTimeZoneGetListResponse';
    protected $timeZoneTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTimeZoneGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeZoneTable(TableType $timeZoneTable = null)
    {
        $this->timeZoneTable = $timeZoneTable;
        $this->timeZoneTable->setElementName('timeZoneTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTimeZoneTable()
    {
        return $this->timeZoneTable;
    }
}
