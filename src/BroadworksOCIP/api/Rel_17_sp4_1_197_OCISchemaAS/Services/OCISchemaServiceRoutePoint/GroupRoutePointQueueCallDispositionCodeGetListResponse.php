<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupRoutePointQueueCallDispositionCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description" and "Level".
 *         Level column can be any of the values in the data type CallDispositionCodeLevel.
 */
class GroupRoutePointQueueCallDispositionCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointQueueCallDispositionCodeGetListResponse';
    protected $dispositionCodesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointQueueCallDispositionCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDispositionCodesTable(TableType $dispositionCodesTable = null)
    {
        $this->dispositionCodesTable = $dispositionCodesTable;
        $this->dispositionCodesTable->setElementName('dispositionCodesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDispositionCodesTable()
    {
        return $this->dispositionCodesTable;
    }
}
